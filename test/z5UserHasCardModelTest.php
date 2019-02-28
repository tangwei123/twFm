<?phpuse Models\z5UserHasCardModel;class z5UserHasCardModelTest extends PHPUnit_Framework_TestCase {    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试新增一条记录     */    public function testaddOne()    {        $model = new z5UserHasCardModel();        $model->userId = 10;        $model->activityId = 10;        $model->cardId = 10;        $model->addTime = "2019-02-12";        $res = $model->addOne();        var_dump($res);        #./vendor/bin/phpunit --filter testaddOne ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试删除记录的方法，不进回收站，直接删数据库的记录     */    public function testdeleteOne()    {        $record = z5UserHasCardModel::getOneById(10);        if(empty($record)){            echo "搜索无数据";            exit;}        $record = $record[0];        $res = $record->deleteOne();        var_dump($res);        #./vendor/bin/phpunit --filter testdeleteOne ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByUseridWithOutLimit()    {        $record = z5UserHasCardModel::getAllByUseridWithOutLimit(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByUseridWithLimit()    {        $record = z5UserHasCardModel::getAllByUseridWithLimit(10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:获取一条数据     */    public function testgetOneByUserid()    {        $record = z5UserHasCardModel::getOneByUserid(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByUserid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByActivityidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByActivityidWithOutLimit(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByActivityidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByActivityidWithLimit()    {        $record = z5UserHasCardModel::getAllByActivityidWithLimit(10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByActivityidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:获取一条数据     */    public function testgetOneByActivityid()    {        $record = z5UserHasCardModel::getOneByActivityid(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByActivityid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByCardidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByCardidWithOutLimit(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByCardidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带分页获取所有的不在回收站内的数据     */    public function testgetAllByCardidWithLimit()    {        $record = z5UserHasCardModel::getAllByCardidWithLimit(10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByCardidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:获取一条数据     */    public function testgetOneByCardid()    {        $record = z5UserHasCardModel::getOneByCardid(10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByCardid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndActivityidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndActivityidWithOutLimit(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndActivityidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndActivityidWithLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndActivityidWithLimit(10, 10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndActivityidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试获取一条数据     */    public function testgetOneByUseridAndActivityid()    {        $record = z5UserHasCardModel::getOneByUseridAndActivityid(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByUseridAndActivityid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndCardidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndCardidWithOutLimit(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndCardidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndCardidWithLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndCardidWithLimit(10, 10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndCardidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试获取一条数据     */    public function testgetOneByUseridAndCardid()    {        $record = z5UserHasCardModel::getOneByUseridAndCardid(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByUseridAndCardid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByActivityidAndCardidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByActivityidAndCardidWithOutLimit(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByActivityidAndCardidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByActivityidAndCardidWithLimit()    {        $record = z5UserHasCardModel::getAllByActivityidAndCardidWithLimit(10, 10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByActivityidAndCardidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试获取一条数据     */    public function testgetOneByActivityidAndCardid()    {        $record = z5UserHasCardModel::getOneByActivityidAndCardid(10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByActivityidAndCardid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndActivityidAndCardidWithOutLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndActivityidAndCardidWithOutLimit(10, 10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndActivityidAndCardidWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试带limit的获取所有的没被删除的数据     */    public function testgetAllByUseridAndActivityidAndCardidWithLimit()    {        $record = z5UserHasCardModel::getAllByUseridAndActivityidAndCardidWithLimit(10, 10, 10, "limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllByUseridAndActivityidAndCardidWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试获取一条数据     */    public function testgetOneByUseridAndActivityidAndCardid()    {        $record = z5UserHasCardModel::getOneByUseridAndActivityidAndCardid(10, 10, 10);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByUseridAndActivityidAndCardid ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据ID获取一条记录     */    public function testgetOneById()    {        $record = z5UserHasCardModel::getOneById(1);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneById ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:根据ID获取一条记录     */    public function testgetOneByIdForUpdate()    {        $record = z5UserHasCardModel::getOneByIdForUpdate(1);        var_dump($record);        #./vendor/bin/phpunit --filter testgetOneByIdForUpdate ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:不带limit的获取所有的数据     */    public function testgetAllWithOutLimit()    {        $record = z5UserHasCardModel::getAllWithOutLimit();        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllWithOutLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:不带limit的获取所有的数据     */    public function testgetAllWithLimit()    {        $record = z5UserHasCardModel::getAllWithLimit("limit 0,1");        var_dump($record);        #./vendor/bin/phpunit --filter testgetAllWithLimit ./test/z5UserHasCardModelTest.php    }    /**     * User: tangwei     * Date: 2019.02.28     * @param      * @return     * Function:测试编辑一条记录     */    public function testeditOne()    {        $record = z5UserHasCardModel::getOneById(1);        if(empty($record)){            echo "搜索无数据";            exit;}        $record = $record[0];        $record->userId = 10;        $record->activityId = 10;        $record->cardId = 10;        $record->addTime = "2019-02-12";        $res = $record->editOne();        var_dump($res);        #./vendor/bin/phpunit --filter testeditOne ./test/z5UserHasCardModelTest.php    }}