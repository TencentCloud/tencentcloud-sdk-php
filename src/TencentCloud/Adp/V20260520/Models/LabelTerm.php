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
 * 标准词（标签值的一项）
 *
 * @method array getSynonymList() 获取<p>同义词列表</p>
 * @method void setSynonymList(array $SynonymList) 设置<p>同义词列表</p>
 * @method string getTerm() 获取<p>标准词</p>
 * @method void setTerm(string $Term) 设置<p>标准词</p>
 * @method string getTermId() 获取<p>标准词 ID（由后台生成，创建时不传）</p>
 * @method void setTermId(string $TermId) 设置<p>标准词 ID（由后台生成，创建时不传）</p>
 */
class LabelTerm extends AbstractModel
{
    /**
     * @var array <p>同义词列表</p>
     */
    public $SynonymList;

    /**
     * @var string <p>标准词</p>
     */
    public $Term;

    /**
     * @var string <p>标准词 ID（由后台生成，创建时不传）</p>
     */
    public $TermId;

    /**
     * @param array $SynonymList <p>同义词列表</p>
     * @param string $Term <p>标准词</p>
     * @param string $TermId <p>标准词 ID（由后台生成，创建时不传）</p>
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
        if (array_key_exists("SynonymList",$param) and $param["SynonymList"] !== null) {
            $this->SynonymList = $param["SynonymList"];
        }

        if (array_key_exists("Term",$param) and $param["Term"] !== null) {
            $this->Term = $param["Term"];
        }

        if (array_key_exists("TermId",$param) and $param["TermId"] !== null) {
            $this->TermId = $param["TermId"];
        }
    }
}
