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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准部位
 *
 * @method string getPart() 获取部位值
 * @method void setPart(string $Part) 设置部位值
 * @method string getPartDirection() 获取部位方向
 * @method void setPartDirection(string $PartDirection) 设置部位方向
 * @method string getTissue() 获取组织值
 * @method void setTissue(string $Tissue) 设置组织值
 * @method string getTissueDirection() 获取组织方向
 * @method void setTissueDirection(string $TissueDirection) 设置组织方向
 * @method string getUpper() 获取上级部位
 * @method void setUpper(string $Upper) 设置上级部位
 * @method PartDesc getPartDetail() 获取部位详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartDetail(PartDesc $PartDetail) 设置部位详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartDetailList() 获取部位详情
 * @method void setPartDetailList(array $PartDetailList) 设置部位详情
 */
class NormPart extends AbstractModel
{
    /**
     * @var string 部位值
     */
    public $Part;

    /**
     * @var string 部位方向
     */
    public $PartDirection;

    /**
     * @var string 组织值
     */
    public $Tissue;

    /**
     * @var string 组织方向
     */
    public $TissueDirection;

    /**
     * @var string 上级部位
     */
    public $Upper;

    /**
     * @var PartDesc 部位详情
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $PartDetail;

    /**
     * @var array 部位详情
     */
    public $PartDetailList;

    /**
     * @param string $Part 部位值
     * @param string $PartDirection 部位方向
     * @param string $Tissue 组织值
     * @param string $TissueDirection 组织方向
     * @param string $Upper 上级部位
     * @param PartDesc $PartDetail 部位详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartDetailList 部位详情
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
        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = $param["Part"];
        }

        if (array_key_exists("PartDirection",$param) and $param["PartDirection"] !== null) {
            $this->PartDirection = $param["PartDirection"];
        }

        if (array_key_exists("Tissue",$param) and $param["Tissue"] !== null) {
            $this->Tissue = $param["Tissue"];
        }

        if (array_key_exists("TissueDirection",$param) and $param["TissueDirection"] !== null) {
            $this->TissueDirection = $param["TissueDirection"];
        }

        if (array_key_exists("Upper",$param) and $param["Upper"] !== null) {
            $this->Upper = $param["Upper"];
        }

        if (array_key_exists("PartDetail",$param) and $param["PartDetail"] !== null) {
            $this->PartDetail = new PartDesc();
            $this->PartDetail->deserialize($param["PartDetail"]);
        }

        if (array_key_exists("PartDetailList",$param) and $param["PartDetailList"] !== null) {
            $this->PartDetailList = [];
            foreach ($param["PartDetailList"] as $key => $value){
                $obj = new PartDesc();
                $obj->deserialize($value);
                array_push($this->PartDetailList, $obj);
            }
        }
    }
}
