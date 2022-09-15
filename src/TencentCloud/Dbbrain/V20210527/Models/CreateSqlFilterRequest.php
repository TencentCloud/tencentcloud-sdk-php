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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSqlFilter请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getSessionToken() 获取通过VerifyUserAccount获取有效期为5分钟的会话token，使用后会自动延长token有效期至五分钟后。
 * @method void setSessionToken(string $SessionToken) 设置通过VerifyUserAccount获取有效期为5分钟的会话token，使用后会自动延长token有效期至五分钟后。
 * @method string getSqlType() 获取SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
 * @method void setSqlType(string $SqlType) 设置SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
 * @method string getFilterKey() 获取关键字，用于筛选SQL语句，多个关键字用英文逗号分隔，逗号不能作为关键词，多个关键词之间的关系为“逻辑与”。
 * @method void setFilterKey(string $FilterKey) 设置关键字，用于筛选SQL语句，多个关键字用英文逗号分隔，逗号不能作为关键词，多个关键词之间的关系为“逻辑与”。
 * @method integer getMaxConcurrency() 获取最大并发度，取值不能小于0，如果该值设为 0，则表示限制所有匹配的SQL执行。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置最大并发度，取值不能小于0，如果该值设为 0，则表示限制所有匹配的SQL执行。
 * @method integer getDuration() 获取限流时长，单位秒，支持-1和小于2147483647的正整数，-1表示永不过期。
 * @method void setDuration(integer $Duration) 设置限流时长，单位秒，支持-1和小于2147483647的正整数，-1表示永不过期。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 */
class CreateSqlFilterRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 通过VerifyUserAccount获取有效期为5分钟的会话token，使用后会自动延长token有效期至五分钟后。
     */
    public $SessionToken;

    /**
     * @var string SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
     */
    public $SqlType;

    /**
     * @var string 关键字，用于筛选SQL语句，多个关键字用英文逗号分隔，逗号不能作为关键词，多个关键词之间的关系为“逻辑与”。
     */
    public $FilterKey;

    /**
     * @var integer 最大并发度，取值不能小于0，如果该值设为 0，则表示限制所有匹配的SQL执行。
     */
    public $MaxConcurrency;

    /**
     * @var integer 限流时长，单位秒，支持-1和小于2147483647的正整数，-1表示永不过期。
     */
    public $Duration;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $SessionToken 通过VerifyUserAccount获取有效期为5分钟的会话token，使用后会自动延长token有效期至五分钟后。
     * @param string $SqlType SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
     * @param string $FilterKey 关键字，用于筛选SQL语句，多个关键字用英文逗号分隔，逗号不能作为关键词，多个关键词之间的关系为“逻辑与”。
     * @param integer $MaxConcurrency 最大并发度，取值不能小于0，如果该值设为 0，则表示限制所有匹配的SQL执行。
     * @param integer $Duration 限流时长，单位秒，支持-1和小于2147483647的正整数，-1表示永不过期。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
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

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("FilterKey",$param) and $param["FilterKey"] !== null) {
            $this->FilterKey = $param["FilterKey"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
