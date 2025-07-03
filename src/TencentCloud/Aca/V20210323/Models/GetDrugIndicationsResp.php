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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药品适应症响应
 *
 * @method array getIndications() 获取适应症
 * @method void setIndications(array $Indications) 设置适应症
 * @method array getDocInfos() 获取药品说明
 * @method void setDocInfos(array $DocInfos) 设置药品说明
 */
class GetDrugIndicationsResp extends AbstractModel
{
    /**
     * @var array 适应症
     */
    public $Indications;

    /**
     * @var array 药品说明
     */
    public $DocInfos;

    /**
     * @param array $Indications 适应症
     * @param array $DocInfos 药品说明
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
        if (array_key_exists("Indications",$param) and $param["Indications"] !== null) {
            $this->Indications = $param["Indications"];
        }

        if (array_key_exists("DocInfos",$param) and $param["DocInfos"] !== null) {
            $this->DocInfos = [];
            foreach ($param["DocInfos"] as $key => $value){
                $obj = new DocInfo();
                $obj->deserialize($value);
                array_push($this->DocInfos, $obj);
            }
        }
    }
}
