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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检结论
 *
 * @method array getOverView() 获取结论段落
 * @method void setOverView(array $OverView) 设置结论段落
 * @method array getAbnormality() 获取异常与建议段落
 * @method void setAbnormality(array $Abnormality) 设置异常与建议段落
 */
class Exame extends AbstractModel
{
    /**
     * @var array 结论段落
     */
    public $OverView;

    /**
     * @var array 异常与建议段落
     */
    public $Abnormality;

    /**
     * @param array $OverView 结论段落
     * @param array $Abnormality 异常与建议段落
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
        if (array_key_exists("OverView",$param) and $param["OverView"] !== null) {
            $this->OverView = [];
            foreach ($param["OverView"] as $key => $value){
                $obj = new ResultInfo();
                $obj->deserialize($value);
                array_push($this->OverView, $obj);
            }
        }

        if (array_key_exists("Abnormality",$param) and $param["Abnormality"] !== null) {
            $this->Abnormality = [];
            foreach ($param["Abnormality"] as $key => $value){
                $obj = new ResultInfo();
                $obj->deserialize($value);
                array_push($this->Abnormality, $obj);
            }
        }
    }
}
