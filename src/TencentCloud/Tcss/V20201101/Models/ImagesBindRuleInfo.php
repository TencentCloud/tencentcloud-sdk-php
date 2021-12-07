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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询镜像绑定的运行时规则信息
 *
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method integer getContainerCnt() 获取关联容器数量
 * @method void setContainerCnt(integer $ContainerCnt) 设置关联容器数量
 * @method string getRuleId() 获取绑定规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置绑定规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取规则名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置规则名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImageSize() 获取镜像大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTime(string $ScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImagesBindRuleInfo extends AbstractModel
{
    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var integer 关联容器数量
     */
    public $ContainerCnt;

    /**
     * @var string 绑定规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 镜像大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSize;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTime;

    /**
     * @param string $ImageId 镜像id
     * @param string $ImageName 镜像名称
     * @param integer $ContainerCnt 关联容器数量
     * @param string $RuleId 绑定规则id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 规则名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImageSize 镜像大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 最近扫描时间
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
