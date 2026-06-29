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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用辅助信息 - 包含各类辅助状态和扩展信息(用户不可修改)
 *
 * @method AppAppeal getAppeal() 获取申诉信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppeal(AppAppeal $Appeal) 设置申诉信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SearchResourceStatusInfo getSearchResourceStatus() 获取搜索资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchResourceStatus(SearchResourceStatusInfo $SearchResourceStatus) 设置搜索资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method SpecialStatusInfo getSpecialStatusInfo() 获取特殊状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecialStatusInfo(SpecialStatusInfo $SpecialStatusInfo) 设置特殊状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppSubStatusInfo getSubStatus() 获取子状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubStatus(AppSubStatusInfo $SubStatus) 设置子状态信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppAuxiliaryInfo extends AbstractModel
{
    /**
     * @var AppAppeal 申诉信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Appeal;

    /**
     * @var SearchResourceStatusInfo 搜索资源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchResourceStatus;

    /**
     * @var SpecialStatusInfo 特殊状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecialStatusInfo;

    /**
     * @var AppSubStatusInfo 子状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubStatus;

    /**
     * @param AppAppeal $Appeal 申诉信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SearchResourceStatusInfo $SearchResourceStatus 搜索资源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param SpecialStatusInfo $SpecialStatusInfo 特殊状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppSubStatusInfo $SubStatus 子状态信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Appeal",$param) and $param["Appeal"] !== null) {
            $this->Appeal = new AppAppeal();
            $this->Appeal->deserialize($param["Appeal"]);
        }

        if (array_key_exists("SearchResourceStatus",$param) and $param["SearchResourceStatus"] !== null) {
            $this->SearchResourceStatus = new SearchResourceStatusInfo();
            $this->SearchResourceStatus->deserialize($param["SearchResourceStatus"]);
        }

        if (array_key_exists("SpecialStatusInfo",$param) and $param["SpecialStatusInfo"] !== null) {
            $this->SpecialStatusInfo = new SpecialStatusInfo();
            $this->SpecialStatusInfo->deserialize($param["SpecialStatusInfo"]);
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = new AppSubStatusInfo();
            $this->SubStatus->deserialize($param["SubStatus"]);
        }
    }
}
