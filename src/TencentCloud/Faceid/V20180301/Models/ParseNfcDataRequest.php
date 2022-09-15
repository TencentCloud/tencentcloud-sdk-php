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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParseNfcData请求参数结构体
 *
 * @method string getReqId() 获取前端SDK返回
 * @method void setReqId(string $ReqId) 设置前端SDK返回
 */
class ParseNfcDataRequest extends AbstractModel
{
    /**
     * @var string 前端SDK返回
     */
    public $ReqId;

    /**
     * @param string $ReqId 前端SDK返回
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
        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }
    }
}
