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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音视频任务结构
 *
 * @method string getDataId() 获取<p>数据ID</p>
 * @method void setDataId(string $DataId) 设置<p>数据ID</p>
 * @method string getName() 获取<p>任务名</p>
 * @method void setName(string $Name) 设置<p>任务名</p>
 * @method StorageInfo getInput() 获取<p>任务输入</p>
 * @method void setInput(StorageInfo $Input) 设置<p>任务输入</p>
 * @method DecodeParams getDecodeParams() 获取<p>视频解码参数</p>
 * @method void setDecodeParams(DecodeParams $DecodeParams) 设置<p>视频解码参数</p>
 */
class TaskInput extends AbstractModel
{
    /**
     * @var string <p>数据ID</p>
     */
    public $DataId;

    /**
     * @var string <p>任务名</p>
     */
    public $Name;

    /**
     * @var StorageInfo <p>任务输入</p>
     */
    public $Input;

    /**
     * @var DecodeParams <p>视频解码参数</p>
     */
    public $DecodeParams;

    /**
     * @param string $DataId <p>数据ID</p>
     * @param string $Name <p>任务名</p>
     * @param StorageInfo $Input <p>任务输入</p>
     * @param DecodeParams $DecodeParams <p>视频解码参数</p>
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new StorageInfo();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("DecodeParams",$param) and $param["DecodeParams"] !== null) {
            $this->DecodeParams = new DecodeParams();
            $this->DecodeParams->deserialize($param["DecodeParams"]);
        }
    }
}
