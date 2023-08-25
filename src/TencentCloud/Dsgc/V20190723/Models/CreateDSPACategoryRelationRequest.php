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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPACategoryRelation请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method integer getCategoryId() 获取分类id
 * @method void setCategoryId(integer $CategoryId) 设置分类id
 * @method integer getParentCategoryId() 获取父级分类id（无父级分类传-1）
 * @method void setParentCategoryId(integer $ParentCategoryId) 设置父级分类id（无父级分类传-1）
 * @method integer getComplianceId() 获取分类模板id
 * @method void setComplianceId(integer $ComplianceId) 设置分类模板id
 */
class CreateDSPACategoryRelationRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var integer 分类id
     */
    public $CategoryId;

    /**
     * @var integer 父级分类id（无父级分类传-1）
     */
    public $ParentCategoryId;

    /**
     * @var integer 分类模板id
     */
    public $ComplianceId;

    /**
     * @param string $DspaId dspa实例id
     * @param integer $CategoryId 分类id
     * @param integer $ParentCategoryId 父级分类id（无父级分类传-1）
     * @param integer $ComplianceId 分类模板id
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
