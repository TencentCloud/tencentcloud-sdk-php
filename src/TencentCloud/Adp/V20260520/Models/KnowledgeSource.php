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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识来源信息
 *
 * @method boolean getIsBigData() 获取<p>是否为大数据</p>
 * @method void setIsBigData(boolean $IsBigData) 设置<p>是否为大数据</p>
 * @method boolean getIsShared() 获取<p>是否为共享知识库</p>
 * @method void setIsShared(boolean $IsShared) 设置<p>是否为共享知识库</p>
 * @method string getKbName() 获取<p>知识库名</p>
 * @method void setKbName(string $KbName) 设置<p>知识库名</p>
 */
class KnowledgeSource extends AbstractModel
{
    /**
     * @var boolean <p>是否为大数据</p>
     */
    public $IsBigData;

    /**
     * @var boolean <p>是否为共享知识库</p>
     */
    public $IsShared;

    /**
     * @var string <p>知识库名</p>
     */
    public $KbName;

    /**
     * @param boolean $IsBigData <p>是否为大数据</p>
     * @param boolean $IsShared <p>是否为共享知识库</p>
     * @param string $KbName <p>知识库名</p>
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
        if (array_key_exists("IsBigData",$param) and $param["IsBigData"] !== null) {
            $this->IsBigData = $param["IsBigData"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("KbName",$param) and $param["KbName"] !== null) {
            $this->KbName = $param["KbName"];
        }
    }
}
