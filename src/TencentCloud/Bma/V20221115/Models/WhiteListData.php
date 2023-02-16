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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白名单数据
 *
 * @method integer getWhiteListId() 获取白名单id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhiteListId(integer $WhiteListId) 设置白名单id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompanyId() 获取企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyId(integer $CompanyId) 设置企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrandName() 获取品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrandName(string $BrandName) 设置品牌名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetsType() 获取资产类型：0-网站 1-app 2-公众号 3-小程序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetsType(integer $AssetsType) 设置资产类型：0-网站 1-app 2-公众号 3-小程序
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWhiteList() 获取白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhiteList(string $WhiteList) 设置白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取新增时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置新增时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class WhiteListData extends AbstractModel
{
    /**
     * @var integer 白名单id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhiteListId;

    /**
     * @var integer 企业id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyId;

    /**
     * @var string 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrandName;

    /**
     * @var integer 资产类型：0-网站 1-app 2-公众号 3-小程序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetsType;

    /**
     * @var string 白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhiteList;

    /**
     * @var string 新增时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @param integer $WhiteListId 白名单id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompanyId 企业id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrandName 品牌名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetsType 资产类型：0-网站 1-app 2-公众号 3-小程序
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WhiteList 白名单
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 新增时间
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
        if (array_key_exists("WhiteListId",$param) and $param["WhiteListId"] !== null) {
            $this->WhiteListId = $param["WhiteListId"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("AssetsType",$param) and $param["AssetsType"] !== null) {
            $this->AssetsType = $param["AssetsType"];
        }

        if (array_key_exists("WhiteList",$param) and $param["WhiteList"] !== null) {
            $this->WhiteList = $param["WhiteList"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
