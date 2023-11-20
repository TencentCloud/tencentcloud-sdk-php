<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublishSubscribe请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，例如：mssql-dg32dcv
 * @method void setInstanceId(string $InstanceId) 设置实例ID，例如：mssql-dg32dcv
 * @method integer getPublishSubscribeId() 获取发布订阅ID
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) 设置发布订阅ID
 * @method array getDatabaseTupleSet() 获取修改的数据库订阅发布关系集合
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) 设置修改的数据库订阅发布关系集合
 */
class ModifyPublishSubscribeRequest extends AbstractModel
{
    /**
     * @var string 实例ID，例如：mssql-dg32dcv
     */
    public $InstanceId;

    /**
     * @var integer 发布订阅ID
     */
    public $PublishSubscribeId;

    /**
     * @var array 修改的数据库订阅发布关系集合
     */
    public $DatabaseTupleSet;

    /**
     * @param string $InstanceId 实例ID，例如：mssql-dg32dcv
     * @param integer $PublishSubscribeId 发布订阅ID
     * @param array $DatabaseTupleSet 修改的数据库订阅发布关系集合
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new ModifyDataBaseTuple();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }
    }
}
