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
 * 集群巡检诊断结果详情信息
 *
 * @method string getLevel() 获取诊断结果级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置诊断结果级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjName() 获取诊断对象名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjName(string $ObjName) 设置诊断对象名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getObjInfo() 获取诊断对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjInfo(array $ObjInfo) 设置诊断对象信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取诊断项标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置诊断项标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取诊断项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置诊断项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProposal() 获取诊断建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProposal(string $Proposal) 设置诊断建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProposalDocUrl() 获取诊断建议文档链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProposalDocUrl(string $ProposalDocUrl) 设置诊断建议文档链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProposalDocName() 获取诊断建议文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProposalDocName(string $ProposalDocName) 设置诊断建议文档名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class KubeJarvisStateResultsItem extends AbstractModel
{
    /**
     * @var string 诊断结果级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 诊断对象名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjName;

    /**
     * @var array 诊断对象信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjInfo;

    /**
     * @var string 诊断项标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 诊断项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 诊断建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proposal;

    /**
     * @var string 诊断建议文档链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProposalDocUrl;

    /**
     * @var string 诊断建议文档名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProposalDocName;

    /**
     * @param string $Level 诊断结果级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjName 诊断对象名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ObjInfo 诊断对象信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 诊断项标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 诊断项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Proposal 诊断建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProposalDocUrl 诊断建议文档链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProposalDocName 诊断建议文档名称
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ObjName",$param) and $param["ObjName"] !== null) {
            $this->ObjName = $param["ObjName"];
        }

        if (array_key_exists("ObjInfo",$param) and $param["ObjInfo"] !== null) {
            $this->ObjInfo = [];
            foreach ($param["ObjInfo"] as $key => $value){
                $obj = new KubeJarvisStateResultObjInfo();
                $obj->deserialize($value);
                array_push($this->ObjInfo, $obj);
            }
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Proposal",$param) and $param["Proposal"] !== null) {
            $this->Proposal = $param["Proposal"];
        }

        if (array_key_exists("ProposalDocUrl",$param) and $param["ProposalDocUrl"] !== null) {
            $this->ProposalDocUrl = $param["ProposalDocUrl"];
        }

        if (array_key_exists("ProposalDocName",$param) and $param["ProposalDocName"] !== null) {
            $this->ProposalDocName = $param["ProposalDocName"];
        }
    }
}
