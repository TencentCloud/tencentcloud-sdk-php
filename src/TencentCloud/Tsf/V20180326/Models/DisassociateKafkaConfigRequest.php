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
 * DisassociateKafkaConfig请求参数结构体
 *
 * @method string getConfigId() 获取配置项id
 * @method void setConfigId(string $ConfigId) 设置配置项id
 * @method array getGroupIds() 获取部署组id
 * @method void setGroupIds(array $GroupIds) 设置部署组id
 */
class DisassociateKafkaConfigRequest extends AbstractModel
{
    /**
     * @var string 配置项id
     */
    public $ConfigId;

    /**
     * @var array 部署组id
     */
    public $GroupIds;

    /**
     * @param string $ConfigId 配置项id
     * @param array $GroupIds 部署组id
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

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
