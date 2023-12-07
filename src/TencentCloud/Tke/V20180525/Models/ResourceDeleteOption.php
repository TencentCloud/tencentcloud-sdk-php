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
 * 资源删除选项
 *
 * @method string getResourceType() 获取资源类型，例如CBS、CLB、CVM
 * @method void setResourceType(string $ResourceType) 设置资源类型，例如CBS、CLB、CVM
 * @method string getDeleteMode() 获取集群删除时CBS资源的删除模式：terminate（销毁），retain （保留）。其他资源默认为销毁。
 * @method void setDeleteMode(string $DeleteMode) 设置集群删除时CBS资源的删除模式：terminate（销毁），retain （保留）。其他资源默认为销毁。
 * @method boolean getSkipDeletionProtection() 获取是否跳过开启删除保护的资源，默认false，设置为true时不清理开启了删除保护的资源，clb有终端节点的情况也属于开了删除保护。
 * @method void setSkipDeletionProtection(boolean $SkipDeletionProtection) 设置是否跳过开启删除保护的资源，默认false，设置为true时不清理开启了删除保护的资源，clb有终端节点的情况也属于开了删除保护。
 */
class ResourceDeleteOption extends AbstractModel
{
    /**
     * @var string 资源类型，例如CBS、CLB、CVM
     */
    public $ResourceType;

    /**
     * @var string 集群删除时CBS资源的删除模式：terminate（销毁），retain （保留）。其他资源默认为销毁。
     */
    public $DeleteMode;

    /**
     * @var boolean 是否跳过开启删除保护的资源，默认false，设置为true时不清理开启了删除保护的资源，clb有终端节点的情况也属于开了删除保护。
     */
    public $SkipDeletionProtection;

    /**
     * @param string $ResourceType 资源类型，例如CBS、CLB、CVM
     * @param string $DeleteMode 集群删除时CBS资源的删除模式：terminate（销毁），retain （保留）。其他资源默认为销毁。
     * @param boolean $SkipDeletionProtection 是否跳过开启删除保护的资源，默认false，设置为true时不清理开启了删除保护的资源，clb有终端节点的情况也属于开了删除保护。
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("SkipDeletionProtection",$param) and $param["SkipDeletionProtection"] !== null) {
            $this->SkipDeletionProtection = $param["SkipDeletionProtection"];
        }
    }
}
