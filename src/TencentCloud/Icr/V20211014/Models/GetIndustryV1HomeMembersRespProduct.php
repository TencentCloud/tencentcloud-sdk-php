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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取成员列表接口回包ProductList
 *
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEditTime() 获取编辑时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditTime(string $EditTime) 设置编辑时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppKey() 获取机器人ID（AppKey信息）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppKey(string $AppKey) 设置机器人ID（AppKey信息）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取机器人图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置机器人图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndustry() 获取行业信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndustry(array $Industry) 设置行业信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorList() 获取操作员列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorList(string $OperatorList) 设置操作员列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取机器人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置机器人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateList() 获取模板列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateList(string $TemplateList) 设置模板列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespProduct extends AbstractModel
{
    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 编辑时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditTime;

    /**
     * @var string 机器人ID（AppKey信息）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppKey;

    /**
     * @var string 机器人图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var array 行业信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Industry;

    /**
     * @var string 操作员列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorList;

    /**
     * @var string 机器人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 模板列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateList;

    /**
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EditTime 编辑时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppKey 机器人ID（AppKey信息）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 机器人图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Industry 行业信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorList 操作员列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 机器人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateList 模板列表
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EditTime",$param) and $param["EditTime"] !== null) {
            $this->EditTime = $param["EditTime"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = [];
            foreach ($param["Industry"] as $key => $value){
                $obj = new GetIndustryV1HomeMembersRespIndustry();
                $obj->deserialize($value);
                array_push($this->Industry, $obj);
            }
        }

        if (array_key_exists("OperatorList",$param) and $param["OperatorList"] !== null) {
            $this->OperatorList = $param["OperatorList"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TemplateList",$param) and $param["TemplateList"] !== null) {
            $this->TemplateList = $param["TemplateList"];
        }
    }
}
