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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本流量占比
 *
 * @method string getVersionName() 获取版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowRatio() 获取流量占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowRatio(integer $FlowRatio) 设置流量占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method ObjectKV getUrlParam() 获取流量参数键值对（URL参数/HEADERS参数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlParam(ObjectKV $UrlParam) 设置流量参数键值对（URL参数/HEADERS参数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefaultPriority() 获取是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefaultPriority(boolean $IsDefaultPriority) 设置是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseRunVersionFlowItem extends AbstractModel
{
    /**
     * @var string 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var integer 流量占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowRatio;

    /**
     * @var ObjectKV 流量参数键值对（URL参数/HEADERS参数）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlParam;

    /**
     * @var integer 优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var boolean 是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefaultPriority;

    /**
     * @param string $VersionName 版本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowRatio 流量占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param ObjectKV $UrlParam 流量参数键值对（URL参数/HEADERS参数）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefaultPriority 是否是默认兜底版本
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("UrlParam",$param) and $param["UrlParam"] !== null) {
            $this->UrlParam = new ObjectKV();
            $this->UrlParam->deserialize($param["UrlParam"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("IsDefaultPriority",$param) and $param["IsDefaultPriority"] !== null) {
            $this->IsDefaultPriority = $param["IsDefaultPriority"];
        }
    }
}
