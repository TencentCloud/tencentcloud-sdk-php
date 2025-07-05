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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kong后端upstream列表
 *
 * @method array getUpstreamList() 获取无
 * @method void setUpstreamList(array $UpstreamList) 设置无
 */
class KongUpstreamList extends AbstractModel
{
    /**
     * @var array 无
     */
    public $UpstreamList;

    /**
     * @param array $UpstreamList 无
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
        if (array_key_exists("UpstreamList",$param) and $param["UpstreamList"] !== null) {
            $this->UpstreamList = [];
            foreach ($param["UpstreamList"] as $key => $value){
                $obj = new KongUpstreamPreview();
                $obj->deserialize($value);
                array_push($this->UpstreamList, $obj);
            }
        }
    }
}
