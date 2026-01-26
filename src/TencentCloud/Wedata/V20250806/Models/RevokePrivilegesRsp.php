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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * openapi回收授权返回
 *
 * @method boolean getOverallSuccess() 获取结果
 * @method void setOverallSuccess(boolean $OverallSuccess) 设置结果
 * @method array getResults() 获取详情列表
 * @method void setResults(array $Results) 设置详情列表
 */
class RevokePrivilegesRsp extends AbstractModel
{
    /**
     * @var boolean 结果
     */
    public $OverallSuccess;

    /**
     * @var array 详情列表
     */
    public $Results;

    /**
     * @param boolean $OverallSuccess 结果
     * @param array $Results 详情列表
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
        if (array_key_exists("OverallSuccess",$param) and $param["OverallSuccess"] !== null) {
            $this->OverallSuccess = $param["OverallSuccess"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new AuthorizeResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
