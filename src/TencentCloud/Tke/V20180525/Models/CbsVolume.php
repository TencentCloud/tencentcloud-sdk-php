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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EKS Instnace CBS volume
 *
 * @method string getName() 获取cbs volume 数据卷名称
 * @method void setName(string $Name) 设置cbs volume 数据卷名称
 * @method string getCbsDiskId() 获取腾讯云cbs盘Id
 * @method void setCbsDiskId(string $CbsDiskId) 设置腾讯云cbs盘Id
 */
class CbsVolume extends AbstractModel
{
    /**
     * @var string cbs volume 数据卷名称
     */
    public $Name;

    /**
     * @var string 腾讯云cbs盘Id
     */
    public $CbsDiskId;

    /**
     * @param string $Name cbs volume 数据卷名称
     * @param string $CbsDiskId 腾讯云cbs盘Id
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CbsDiskId",$param) and $param["CbsDiskId"] !== null) {
            $this->CbsDiskId = $param["CbsDiskId"];
        }
    }
}
