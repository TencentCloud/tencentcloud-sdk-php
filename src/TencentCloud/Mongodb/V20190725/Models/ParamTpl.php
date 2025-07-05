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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库参数模板
 *
 * @method string getTplName() 获取参数模板名称
 * @method void setTplName(string $TplName) 设置参数模板名称
 * @method string getTplId() 获取参数模板ID
 * @method void setTplId(string $TplId) 设置参数模板ID
 * @method string getMongoVersion() 获取适用数据库版本
 * @method void setMongoVersion(string $MongoVersion) 设置适用数据库版本
 * @method string getClusterType() 获取适用数据库类型
 * @method void setClusterType(string $ClusterType) 设置适用数据库类型
 * @method string getTplDesc() 获取参数模板描述
 * @method void setTplDesc(string $TplDesc) 设置参数模板描述
 * @method string getTplType() 获取模板类型，包括DEFAULT（默认模板）及CUSTOMIZE（定制模板）两种类型
 * @method void setTplType(string $TplType) 设置模板类型，包括DEFAULT（默认模板）及CUSTOMIZE（定制模板）两种类型
 */
class ParamTpl extends AbstractModel
{
    /**
     * @var string 参数模板名称
     */
    public $TplName;

    /**
     * @var string 参数模板ID
     */
    public $TplId;

    /**
     * @var string 适用数据库版本
     */
    public $MongoVersion;

    /**
     * @var string 适用数据库类型
     */
    public $ClusterType;

    /**
     * @var string 参数模板描述
     */
    public $TplDesc;

    /**
     * @var string 模板类型，包括DEFAULT（默认模板）及CUSTOMIZE（定制模板）两种类型
     */
    public $TplType;

    /**
     * @param string $TplName 参数模板名称
     * @param string $TplId 参数模板ID
     * @param string $MongoVersion 适用数据库版本
     * @param string $ClusterType 适用数据库类型
     * @param string $TplDesc 参数模板描述
     * @param string $TplType 模板类型，包括DEFAULT（默认模板）及CUSTOMIZE（定制模板）两种类型
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
        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("TplId",$param) and $param["TplId"] !== null) {
            $this->TplId = $param["TplId"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TplDesc",$param) and $param["TplDesc"] !== null) {
            $this->TplDesc = $param["TplDesc"];
        }

        if (array_key_exists("TplType",$param) and $param["TplType"] !== null) {
            $this->TplType = $param["TplType"];
        }
    }
}
