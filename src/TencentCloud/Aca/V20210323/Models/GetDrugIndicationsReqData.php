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
 * 获取适应症请求
 *
 * @method array getDrugs() 获取查询药品列表
 * @method void setDrugs(array $Drugs) 设置查询药品列表
 */
class GetDrugIndicationsReqData extends AbstractModel
{
    /**
     * @var array 查询药品列表
     */
    public $Drugs;

    /**
     * @param array $Drugs 查询药品列表
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
        if (array_key_exists("Drugs",$param) and $param["Drugs"] !== null) {
            $this->Drugs = [];
            foreach ($param["Drugs"] as $key => $value){
                $obj = new IndicationsDrug();
                $obj->deserialize($value);
                array_push($this->Drugs, $obj);
            }
        }
    }
}
