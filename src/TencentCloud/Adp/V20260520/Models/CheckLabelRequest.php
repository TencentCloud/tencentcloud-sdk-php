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
 * CheckLabel请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method array getTermList() 获取<p>待校验的标准词列表（数量：1~100）</p>
 * @method void setTermList(array $TermList) 设置<p>待校验的标准词列表（数量：1~100）</p>
 * @method string getLabelId() 获取<p>标签 ID（在指定标签下校验标准词唯一性）</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签 ID（在指定标签下校验标准词唯一性）</p>
 */
class CheckLabelRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var array <p>待校验的标准词列表（数量：1~100）</p>
     */
    public $TermList;

    /**
     * @var string <p>标签 ID（在指定标签下校验标准词唯一性）</p>
     */
    public $LabelId;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param array $TermList <p>待校验的标准词列表（数量：1~100）</p>
     * @param string $LabelId <p>标签 ID（在指定标签下校验标准词唯一性）</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("TermList",$param) and $param["TermList"] !== null) {
            $this->TermList = $param["TermList"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }
    }
}
