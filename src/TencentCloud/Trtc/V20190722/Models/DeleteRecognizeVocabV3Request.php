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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRecognizeVocabV3请求参数结构体
 *
 * @method string getVocabId() 获取<p>词表 id</p>
 * @method void setVocabId(string $VocabId) 设置<p>词表 id</p>
 * @method integer getSdkAppId() 获取<p>客户维度唯一标识</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>客户维度唯一标识</p>
 */
class DeleteRecognizeVocabV3Request extends AbstractModel
{
    /**
     * @var string <p>词表 id</p>
     */
    public $VocabId;

    /**
     * @var integer <p>客户维度唯一标识</p>
     */
    public $SdkAppId;

    /**
     * @param string $VocabId <p>词表 id</p>
     * @param integer $SdkAppId <p>客户维度唯一标识</p>
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
        if (array_key_exists("VocabId",$param) and $param["VocabId"] !== null) {
            $this->VocabId = $param["VocabId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
