<?php namespace Models;use Libs\CObject;class z5UserHasCardModel extends CObject{    static $table = "z5_user_has_card";     /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:新增一条记录     */    public function addOne() : array     {        assert(isset($this->userId) && is_numeric($this->userId) && $this->userId >= 0);        assert(isset($this->activityId) && is_numeric($this->activityId) && $this->activityId >= 0);        assert(isset($this->cardId) && is_numeric($this->cardId) && $this->cardId >= 0);        assert(isset($this->addTime) && $this->addTime != '' );        $sql = "INSERT INTO ".self::$table." (`userId`,`activityId`,`cardId`,`addTime`) VALUES ( ?, ?, ?, ?)";        $sqlParam = array(            $this->userId,            $this->activityId,            $this->cardId,            $this->addTime,);        return self::query($sql, $sqlParam, false);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:删除记录的方法，不进回收站，直接删数据库的记录     */    public function deleteOne() : array     {        $sql = "DELETE FROM ".self::$table." WHERE `id` = ?";        $sqlParam = array($this->id);        return self::query($sql, $sqlParam, false);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据userId不带分页获取所有的数据     */    public static function getAllByUseridWithOutLimit($userId) : array    {        $sql = " SELECT * from ".self::$table." WHERE userId = ? order by id desc ";        $sqlParam = array($userId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据userId带分页获取所有的数据     */    public static function getAllByUseridWithLimit($userId, $limit) : array    {        assert($limit = "");        $sql = " SELECT * from ".self::$table." WHERE userId = ? order by id desc ".$limit;        $sqlParam = array($userId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据userId获取一条数据     */    public static function getOneByUserid($userId) : array    {        $sql = " SELECT * from ".self::$table." WHERE userId = ?  order by id desc limit 0,1";        $sqlParam = array($userId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据activityId不带分页获取所有的数据     */    public static function getAllByActivityidWithOutLimit($activityId) : array    {        $sql = " SELECT * from ".self::$table." WHERE activityId = ? order by id desc ";        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据activityId带分页获取所有的数据     */    public static function getAllByActivityidWithLimit($activityId, $limit) : array    {        assert($limit = "");        $sql = " SELECT * from ".self::$table." WHERE activityId = ? order by id desc ".$limit;        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据activityId获取一条数据     */    public static function getOneByActivityid($activityId) : array    {        $sql = " SELECT * from ".self::$table." WHERE activityId = ?  order by id desc limit 0,1";        $sqlParam = array($activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据cardId不带分页获取所有的数据     */    public static function getAllByCardidWithOutLimit($cardId) : array    {        $sql = " SELECT * from ".self::$table." WHERE cardId = ? order by id desc ";        $sqlParam = array($cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据cardId带分页获取所有的数据     */    public static function getAllByCardidWithLimit($cardId, $limit) : array    {        assert($limit = "");        $sql = " SELECT * from ".self::$table." WHERE cardId = ? order by id desc ".$limit;        $sqlParam = array($cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据cardId获取一条数据     */    public static function getOneByCardid($cardId) : array    {        $sql = " SELECT * from ".self::$table." WHERE cardId = ?  order by id desc limit 0,1";        $sqlParam = array($cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId不带limit的获取所有的没被删除的数据     */    public static function getAllByUseridAndActivityidWithOutLimit($userId, $activityId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? order by id desc ";        $sqlParam = array($userId, $activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId不带limit的获取所有的被删除的数据     */    public static function getAllByUseridAndActivityidWithLimit($userId, $activityId, $limit) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        assert($limit != "");        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? order by id desc ".$limit;        $sqlParam = array($userId, $activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId获取一条数据     */    public static function getOneByUseridAndActivityid($userId, $activityId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? order by id desc limit 0,1";        $sqlParam = array($userId, $activityId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $cardId不带limit的获取所有的没被删除的数据     */    public static function getAllByUseridAndCardidWithOutLimit($userId, $cardId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND cardId = ? order by id desc ";        $sqlParam = array($userId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $cardId不带limit的获取所有的被删除的数据     */    public static function getAllByUseridAndCardidWithLimit($userId, $cardId, $limit) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($cardId) && $cardId > 0);        assert($limit != "");        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND cardId = ? order by id desc ".$limit;        $sqlParam = array($userId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $cardId获取一条数据     */    public static function getOneByUseridAndCardid($userId, $cardId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND cardId = ? order by id desc limit 0,1";        $sqlParam = array($userId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$activityId, $cardId不带limit的获取所有的没被删除的数据     */    public static function getAllByActivityidAndCardidWithOutLimit($activityId, $cardId) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND cardId = ? order by id desc ";        $sqlParam = array($activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$activityId, $cardId不带limit的获取所有的被删除的数据     */    public static function getAllByActivityidAndCardidWithLimit($activityId, $cardId, $limit) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        assert($limit != "");        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND cardId = ? order by id desc ".$limit;        $sqlParam = array($activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$activityId, $cardId获取一条数据     */    public static function getOneByActivityidAndCardid($activityId, $cardId) : array    {        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE activityId = ? AND cardId = ? order by id desc limit 0,1";        $sqlParam = array($activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId, $cardId不带limit的获取所有的没被删除的数据     */    public static function getAllByUseridAndActivityidAndCardidWithOutLimit($userId, $activityId, $cardId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? AND cardId = ? order by id desc ";        $sqlParam = array($userId, $activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId, $cardId不带limit的获取所有的被删除的数据     */    public static function getAllByUseridAndActivityidAndCardidWithLimit($userId, $activityId, $cardId, $limit) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        assert($limit != "");        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? AND cardId = ? order by id desc ".$limit;        $sqlParam = array($userId, $activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据$userId, $activityId, $cardId获取一条数据     */    public static function getOneByUseridAndActivityidAndCardid($userId, $activityId, $cardId) : array    {        assert(is_numeric($userId) && $userId > 0);        assert(is_numeric($activityId) && $activityId > 0);        assert(is_numeric($cardId) && $cardId > 0);        $sql = "SELECT * FROM ".self::$table." WHERE userId = ? AND activityId = ? AND cardId = ? order by id desc limit 0,1";        $sqlParam = array($userId, $activityId, $cardId);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据ID获取一条记录     */    public static function getOneById($id) : array    {        assert(is_numeric($id) && $id > 0);        $sql = "SELECT * FROM ".self::$table." WHERE `id` = ?";        $sqlParam = array($id);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据ID获取一条记录     */    public static function getOneByIdForUpdate($id) : array    {        assert(is_numeric($id) && $id > 0);        $sql = "SELECT * FROM ".self::$table." WHERE `id` = ? FOR UPDATE";        $sqlParam = array($id);        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:不带limit的获取所有的数据     */    public static function getAllWithOutLimit() : array    {        $sql = "SELECT * FROM ".self::$table." order by id desc ";        $sqlParam = array();        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param $limit     * @return     * Function:带limit获取所有的记录     */    public static function getAllWithLimit($limit) : array    {        assert($limit != "");        $sql = "SELECT * from ".self::$table." order by id desc ".$limit;        $sqlParam = array();        return self::query($sql, $sqlParam, true);    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:编辑一条记录     */    public function editOne() : array    {        assert(isset($this->userId) && is_numeric($this->userId) && $this->userId >= 0);        assert(isset($this->activityId) && is_numeric($this->activityId) && $this->activityId >= 0);        assert(isset($this->cardId) && is_numeric($this->cardId) && $this->cardId >= 0);        $sql = "UPDATE ".self::$table." SET `userId` = ?,`activityId` = ?,`cardId` = ? WHERE `id` = ? ";        $sqlParam = array(            $this->userId,            $this->activityId,            $this->cardId,            $this->id        );        return self::query($sql, $sqlParam, false);    }}