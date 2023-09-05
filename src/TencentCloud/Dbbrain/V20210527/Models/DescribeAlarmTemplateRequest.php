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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmTemplate请求参数结构体
 *
 * @method string getTemplateNameRegexp() 获取搜索字段
 * @method void setTemplateNameRegexp(string $TemplateNameRegexp) 设置搜索字段
 * @method integer getLimit() 获取返回限制长度
 * @method void setLimit(integer $Limit) 设置返回限制长度
 * @method integer getOffset() 获取偏置
 * @method void setOffset(integer $Offset) 设置偏置
 * @method string getProduct() 获取mysql -  mysql
cynosdb -  tdsql-c
 * @method void setProduct(string $Product) 设置mysql -  mysql
cynosdb -  tdsql-c
 */
class DescribeAlarmTemplateRequest extends AbstractModel
{
    /**
     * @var string 搜索字段
     */
    public $TemplateNameRegexp;

    /**
     * @var integer 返回限制长度
     */
    public $Limit;

    /**
     * @var integer 偏置
     */
    public $Offset;

    /**
     * @var string mysql -  mysql
cynosdb -  tdsql-c
     */
    public $Product;

    /**
     * @param string $TemplateNameRegexp 搜索字段
     * @param integer $Limit 返回限制长度
     * @param integer $Offset 偏置
     * @param string $Product mysql -  mysql
cynosdb -  tdsql-c
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
        if (array_key_exists("TemplateNameRegexp",$param) and $param["TemplateNameRegexp"] !== null) {
            $this->TemplateNameRegexp = $param["TemplateNameRegexp"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
