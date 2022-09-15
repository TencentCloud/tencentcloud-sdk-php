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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出属性映射
 *
 * @method string getUserPropertyCode() 获取用户属性code
 * @method void setUserPropertyCode(string $UserPropertyCode) 设置用户属性code
 * @method string getColumnName() 获取用户属性映射名称
 * @method void setColumnName(string $ColumnName) 设置用户属性映射名称
 */
class ExportPropertyMap extends AbstractModel
{
    /**
     * @var string 用户属性code
     */
    public $UserPropertyCode;

    /**
     * @var string 用户属性映射名称
     */
    public $ColumnName;

    /**
     * @param string $UserPropertyCode 用户属性code
     * @param string $ColumnName 用户属性映射名称
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
        if (array_key_exists("UserPropertyCode",$param) and $param["UserPropertyCode"] !== null) {
            $this->UserPropertyCode = $param["UserPropertyCode"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }
    }
}
