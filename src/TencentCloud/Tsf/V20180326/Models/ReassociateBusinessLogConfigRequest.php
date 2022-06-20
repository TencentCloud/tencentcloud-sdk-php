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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReassociateBusinessLogConfig请求参数结构体
 *
 * @method string getConfigId() 获取原关联日志配置ID
 * @method void setConfigId(string $ConfigId) 设置原关联日志配置ID
 * @method string getNewConfigId() 获取新关联日志配置ID
 * @method void setNewConfigId(string $NewConfigId) 设置新关联日志配置ID
 * @method string getApplicationId() 获取TSF应用ID
 * @method void setApplicationId(string $ApplicationId) 设置TSF应用ID
 * @method string getGroupId() 获取TSF部署组ID
 * @method void setGroupId(string $GroupId) 设置TSF部署组ID
 */
class ReassociateBusinessLogConfigRequest extends AbstractModel
{
    /**
     * @var string 原关联日志配置ID
     */
    public $ConfigId;

    /**
     * @var string 新关联日志配置ID
     */
    public $NewConfigId;

    /**
     * @var string TSF应用ID
     */
    public $ApplicationId;

    /**
     * @var string TSF部署组ID
     */
    public $GroupId;

    /**
     * @param string $ConfigId 原关联日志配置ID
     * @param string $NewConfigId 新关联日志配置ID
     * @param string $ApplicationId TSF应用ID
     * @param string $GroupId TSF部署组ID
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("NewConfigId",$param) and $param["NewConfigId"] !== null) {
            $this->NewConfigId = $param["NewConfigId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
