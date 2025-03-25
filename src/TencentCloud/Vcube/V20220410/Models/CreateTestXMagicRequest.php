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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTestXMagic请求参数结构体
 *
 * @method integer getApplicationId() 获取将腾讯特效创建到哪个应用下
 * @method void setApplicationId(integer $ApplicationId) 设置将腾讯特效创建到哪个应用下
 * @method string getCompanyPermit() 获取营业执照
 * @method void setCompanyPermit(string $CompanyPermit) 设置营业执照
 * @method string getCompanyType() 获取公司类型
 * @method void setCompanyType(string $CompanyType) 设置公司类型
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 * @method array getPlanList() 获取测试套餐名称
 * @method void setPlanList(array $PlanList) 设置测试套餐名称
 */
class CreateTestXMagicRequest extends AbstractModel
{
    /**
     * @var integer 将腾讯特效创建到哪个应用下
     */
    public $ApplicationId;

    /**
     * @var string 营业执照
     */
    public $CompanyPermit;

    /**
     * @var string 公司类型
     */
    public $CompanyType;

    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @var array 测试套餐名称
     */
    public $PlanList;

    /**
     * @param integer $ApplicationId 将腾讯特效创建到哪个应用下
     * @param string $CompanyPermit 营业执照
     * @param string $CompanyType 公司类型
     * @param string $CompanyName 公司名称
     * @param array $PlanList 测试套餐名称
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("CompanyPermit",$param) and $param["CompanyPermit"] !== null) {
            $this->CompanyPermit = $param["CompanyPermit"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("PlanList",$param) and $param["PlanList"] !== null) {
            $this->PlanList = $param["PlanList"];
        }
    }
}
