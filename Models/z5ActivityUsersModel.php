<?php namespace Models;use Libs\CObject;class z5ActivityUsersModel extends CObject{    static $table = "z5_activity_users";     /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:新增一条记录     */    public function addOne() : int     {        assert(isset($this->nickname) && $this->nickname != '' );        assert(isset($this->mobile) && $this->mobile != '' );        assert(isset($this->headerImg) && $this->headerImg != '' );        assert(isset($this->activityId) && is_numeric($this->activityId) && $this->activityId >= 0);        assert(isset($this->openId) && $this->openId != '' );        assert(isset($this->receiveRedBag) && is_numeric($this->receiveRedBag) && $this->receiveRedBag >= 0);        assert(isset($this->addTime) && $this->addTime != '' );        $sql = "INSERT INTO ".self::$table." (`nickname`,`mobile`,`headerImg`,`activityId`,`openId`,`receiveRedBag`,`addTime`) VALUES ( ?, ?, ?, ?, ?, ?, ?)";        $sqlParam = array(            $this->nickname,            $this->mobile,            $this->headerImg,            $this->activityId,            $this->openId,            $this->receiveRedBag,            $this->addTime,);        return self::query($sql, $sqlParam, false);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:删除记录的方法，不进回收站，直接删数据库的记录     */    public function deleteOne() : int     {        $sql = "DELETE FROM ".self::$table." WHERE `id` = ?";        $sqlParam = array($this->id);        return self::query($sql, $sqlParam, false);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据activityId不带分页获取所有的数据     */    public static function getAllByActivityidWithOutLimit($activityId) : array    {        $sql = " SELECT * from ".self::$table." WHERE activityId = ? order by id desc ";        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据activityId带分页获取所有的数据     */    public static function getAllByActivityidWithLimit($activityId, $limit) : array    {        assert($limit = "");        $sql = " SELECT * from ".self::$table." WHERE activityId = ? order by id desc ".$limit;        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据activityId获取一条数据     */    public static function getOneByActivityid($activityId) : array    {        $sql = " SELECT * from ".self::$table." WHERE activityId = ?  order by id desc limit 0,1";        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据openId不带分页获取所有的数据     */    public static function getAllByOpenidWithOutLimit($openId) : array    {        $sql = " SELECT * from ".self::$table." WHERE openId = ? order by id desc ";        $sqlParam = array($openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据openId带分页获取所有的数据     */    public static function getAllByOpenidWithLimit($openId, $limit) : array    {        assert($limit = "");        $sql = " SELECT * from ".self::$table." WHERE openId = ? order by id desc ".$limit;        $sqlParam = array($openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据openId获取一条数据     */    public static function getOneByOpenid($openId) : array    {        $sql = " SELECT * from ".self::$table." WHERE openId = ?  order by id desc limit 0,1";        $sqlParam = array($openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据$activityId, $openId不带limit的获取所有的没被删除的数据     */    public static function getAllByActivityidAndOpenidWithOutLimit($activityId, $openId) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($openId) && $openId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND openId = ? order by id desc ";        $sqlParam = array($activityId, $openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据$activityId, $openId不带limit的获取所有的被删除的数据     */    public static function getAllByActivityidAndOpenidWithLimit($activityId, $openId, $limit) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($openId) && $openId > 0);        assert($limit != "");        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND openId = ? order by id desc ".$limit;        $sqlParam = array($activityId, $openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据$activityId, $openId获取一条数据     */    public static function getOneByActivityidAndOpenid($activityId, $openId) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($openId) && $openId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND openId = ? order by id desc limit 0,1";        $sqlParam = array($activityId, $openId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据ID获取一条记录     */    public static function getOneById($id) : array    {        assert(is_numeric($id) && $id > 0);        $sql = "SELECT * FROM ".self::$table." WHERE `id` = ?";        $sqlParam = array($id);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:根据ID获取一条记录     */    public static function getOneByIdForUpdate($id) : array    {        assert(is_numeric($id) && $id > 0);        $sql = "SELECT * FROM ".self::$table." WHERE `id` = ? FOR UPDATE";        $sqlParam = array($id);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:不带limit的获取所有的数据     */    public static function getAllWithOutLimit() : array    {        $sql = "SELECT * FROM ".self::$table." order by id desc ";        $sqlParam = array();        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param $limit     * @return     * Function:带limit获取所有的记录     */    public static function getAllWithLimit($limit) : array    {        assert($limit != "");        $sql = "SELECT * from ".self::$table." order by id desc ".$limit;        $sqlParam = array();        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.25     * @param      * @return     * Function:编辑一条记录     */    public function editOne() : int    {        assert(isset($this->nickname) && $this->nickname != '' );        assert(isset($this->mobile) && $this->mobile != '' );        assert(isset($this->headerImg) && $this->headerImg != '' );        assert(isset($this->activityId) && is_numeric($this->activityId) && $this->activityId >= 0);        assert(isset($this->openId) && $this->openId != '' );        assert(isset($this->receiveRedBag) && is_numeric($this->receiveRedBag) && $this->receiveRedBag >= 0);        $sql = "UPDATE ".self::$table." SET `nickname` = ?,`mobile` = ?,`headerImg` = ?,`activityId` = ?,`openId` = ?,`receiveRedBag` = ? WHERE `id` = ? ";        $sqlParam = array(            $this->nickname,            $this->mobile,            $this->headerImg,            $this->activityId,            $this->openId,            $this->receiveRedBag,            $this->id        );        return self::query($sql, $sqlParam, false);    }}