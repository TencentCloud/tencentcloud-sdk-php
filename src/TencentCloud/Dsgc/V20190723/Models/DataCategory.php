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
 * 敏感数据分类
 *
 * @method integer getCategoryId() 获取分类ID
 * @method void setCategoryId(integer $CategoryId) 设置分类ID
 * @method string getName() 获取敏感数据分类名称
 * @method void setName(string $Name) 设置敏感数据分类名称
 * @method integer getSource() 获取敏感数据分类来源，取值：0 内置, 1 自定义
 * @method void setSource(integer $Source) 设置敏感数据分类来源，取值：0 内置, 1 自定义
 * @method integer getRelateComplianceCount() 获取关联模板数量
 * @method void setRelateComplianceCount(integer $RelateComplianceCount) 设置关联模板数量
 */
class DataCategory extends AbstractModel
{
    /**
     * @var integer 分类ID
     */
    public $CategoryId;

    /**
     * @var string 敏感数据分类名称
     */
    public $Name;

    /**
     * @var integer 敏感数据分类来源，取值：0 内置, 1 自定义
     */
    public $Source;

    /**
     * @var integer 关联模板数量
     */
    public $RelateComplianceCount;

    /**
     * @param integer $CategoryId 分类ID
     * @param string $Name 敏感数据分类名称
     * @param integer $Source 敏感数据分类来源，取值：0 内置, 1 自定义
     * @param integer $RelateComplianceCount 关联模板数量
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RelateComplianceCount",$param) and $param["RelateComplianceCount"] !== null) {
            $this->RelateComplianceCount = $param["RelateComplianceCount"];
        }
    }
}
