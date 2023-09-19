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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceName请求参数结构体
 *
 * @method string getInstanceName() 获取新名称
 * @method void setInstanceName(string $InstanceName) 设置新名称
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 * @method string getEdition() 获取版本
 * @method void setEdition(string $Edition) 设置版本
 */
class ModifyInstanceNameRequest extends AbstractModel
{
    /**
     * @var string 新名称
     */
    public $InstanceName;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @var string 版本
     */
    public $Edition;

    /**
     * @param string $InstanceName 新名称
     * @param string $InstanceID 实例id
     * @param string $Edition 版本
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }
    }
}
