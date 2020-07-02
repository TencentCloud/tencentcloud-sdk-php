<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadAsrVocab返回参数结构体
 *
 * @method string getVocabId() 获取词表ID。
 * @method void setVocabId(string $VocabId) 设置词表ID。
 * @method string getWordWeightStr() 获取词表权重文件形式的base64值。
 * @method void setWordWeightStr(string $WordWeightStr) 设置词表权重文件形式的base64值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DownloadAsrVocabResponse extends AbstractModel
{
    /**
     * @var string 词表ID。
     */
    public $VocabId;

    /**
     * @var string 词表权重文件形式的base64值。
     */
    public $WordWeightStr;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VocabId 词表ID。
     * @param string $WordWeightStr 词表权重文件形式的base64值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('VocabId',$param) and $param['VocabId'] !== null) {
            $this->VocabId = $param['VocabId'];
        }

        if (array_key_exists('WordWeightStr',$param) and $param['WordWeightStr'] !== null) {
            $this->WordWeightStr = $param['WordWeightStr'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
