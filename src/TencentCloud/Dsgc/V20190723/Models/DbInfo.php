<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 查询绑定的db信息
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getValidStatus() 获取绑定的状态
 * @method void setValidStatus(string $ValidStatus) 设置绑定的状态
 * @method string getBindType() 获取绑定的类型
 * @method void setBindType(string $BindType) 设置绑定的类型
 */
class DbInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 绑定的状态
     */
    public $ValidStatus;

    /**
     * @var string 绑定的类型
     */
    public $BindType;

    /**
     * @param string $DbName 数据库名称
     * @param string $ValidStatus 绑定的状态
     * @param string $BindType 绑定的类型
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }
    }
}
