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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群所有伸缩组全局参数信息
 *
 * @method AutoScaleResourceConf getGroupGlobalConf() 获取伸缩组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupGlobalConf(AutoScaleResourceConf $GroupGlobalConf) 设置伸缩组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentNodes() 获取当前伸缩组扩容出来的节点数量。
 * @method void setCurrentNodes(integer $CurrentNodes) 设置当前伸缩组扩容出来的节点数量。
 * @method integer getCurrentPostPaidNodes() 获取当前伸缩组扩容出来的后付费节点数量。
 * @method void setCurrentPostPaidNodes(integer $CurrentPostPaidNodes) 设置当前伸缩组扩容出来的后付费节点数量。
 * @method integer getCurrentSpotPaidNodes() 获取当前伸缩组扩容出来的竞价实例节点数量。
 * @method void setCurrentSpotPaidNodes(integer $CurrentSpotPaidNodes) 设置当前伸缩组扩容出来的竞价实例节点数量。
 */
class GroupGlobalConfs extends AbstractModel
{
    /**
     * @var AutoScaleResourceConf 伸缩组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupGlobalConf;

    /**
     * @var integer 当前伸缩组扩容出来的节点数量。
     */
    public $CurrentNodes;

    /**
     * @var integer 当前伸缩组扩容出来的后付费节点数量。
     */
    public $CurrentPostPaidNodes;

    /**
     * @var integer 当前伸缩组扩容出来的竞价实例节点数量。
     */
    public $CurrentSpotPaidNodes;

    /**
     * @param AutoScaleResourceConf $GroupGlobalConf 伸缩组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentNodes 当前伸缩组扩容出来的节点数量。
     * @param integer $CurrentPostPaidNodes 当前伸缩组扩容出来的后付费节点数量。
     * @param integer $CurrentSpotPaidNodes 当前伸缩组扩容出来的竞价实例节点数量。
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
        if (array_key_exists("GroupGlobalConf",$param) and $param["GroupGlobalConf"] !== null) {
            $this->GroupGlobalConf = new AutoScaleResourceConf();
            $this->GroupGlobalConf->deserialize($param["GroupGlobalConf"]);
        }

        if (array_key_exists("CurrentNodes",$param) and $param["CurrentNodes"] !== null) {
            $this->CurrentNodes = $param["CurrentNodes"];
        }

        if (array_key_exists("CurrentPostPaidNodes",$param) and $param["CurrentPostPaidNodes"] !== null) {
            $this->CurrentPostPaidNodes = $param["CurrentPostPaidNodes"];
        }

        if (array_key_exists("CurrentSpotPaidNodes",$param) and $param["CurrentSpotPaidNodes"] !== null) {
            $this->CurrentSpotPaidNodes = $param["CurrentSpotPaidNodes"];
        }
    }
}
