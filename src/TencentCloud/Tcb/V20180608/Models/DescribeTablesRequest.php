<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTables请求参数结构体
 *
 * @method integer getMgoLimit() 获取分页条件
 * @method void setMgoLimit(integer $MgoLimit) 设置分页条件
 * @method string getTag() 获取实例ID
 * @method void setTag(string $Tag) 设置实例ID
 * @method integer getMgoOffset() 获取分页条件
 * @method void setMgoOffset(integer $MgoOffset) 设置分页条件
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method MongoConnector getMongoConnector() 获取MongoConnector
 * @method void setMongoConnector(MongoConnector $MongoConnector) 设置MongoConnector
 */
class DescribeTablesRequest extends AbstractModel
{
    /**
     * @var integer 分页条件
     */
    public $MgoLimit;

    /**
     * @var string 实例ID
     */
    public $Tag;

    /**
     * @var integer 分页条件
     */
    public $MgoOffset;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var MongoConnector MongoConnector
     */
    public $MongoConnector;

    /**
     * @param integer $MgoLimit 分页条件
     * @param string $Tag 实例ID
     * @param integer $MgoOffset 分页条件
     * @param string $EnvId 环境id
     * @param MongoConnector $MongoConnector MongoConnector
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
        if (array_key_exists("MgoLimit",$param) and $param["MgoLimit"] !== null) {
            $this->MgoLimit = $param["MgoLimit"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("MgoOffset",$param) and $param["MgoOffset"] !== null) {
            $this->MgoOffset = $param["MgoOffset"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("MongoConnector",$param) and $param["MongoConnector"] !== null) {
            $this->MongoConnector = new MongoConnector();
            $this->MongoConnector->deserialize($param["MongoConnector"]);
        }
    }
}
