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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药品文档信息
 *
 * @method string getDrugId() 获取药品ID
 * @method void setDrugId(string $DrugId) 设置药品ID
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getDocUrl() 获取说明书地址
 * @method void setDocUrl(string $DocUrl) 设置说明书地址
 */
class DocInfo extends AbstractModel
{
    /**
     * @var string 药品ID
     */
    public $DrugId;

    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 说明书地址
     */
    public $DocUrl;

    /**
     * @param string $DrugId 药品ID
     * @param string $DrugName 药品名称
     * @param string $DocUrl 说明书地址
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
        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("DocUrl",$param) and $param["DocUrl"] !== null) {
            $this->DocUrl = $param["DocUrl"];
        }
    }
}
