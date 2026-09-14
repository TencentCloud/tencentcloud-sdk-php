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
 * 标签标准词修改项（增量更新）
 *
 * @method integer getModifyAction() 获取<p>操作类型（不可为 0，取值：1=新增，2=修改，3=删除）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
 * @method void setModifyAction(integer $ModifyAction) 设置<p>操作类型（不可为 0，取值：1=新增，2=修改，3=删除）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
 * @method array getSynonymList() 获取<p>同义词列表（CREATE 与 UPDATE 时传完整同义词集合，覆盖式更新）</p>
 * @method void setSynonymList(array $SynonymList) 设置<p>同义词列表（CREATE 与 UPDATE 时传完整同义词集合，覆盖式更新）</p>
 * @method string getTerm() 获取<p>标准词（CREATE 与 UPDATE 必填，DELETE 可留空）</p>
 * @method void setTerm(string $Term) 设置<p>标准词（CREATE 与 UPDATE 必填，DELETE 可留空）</p>
 * @method string getTermId() 获取<p>标准词 ID（UPDATE 与 DELETE 必填，CREATE 留空由后台生成）</p>
 * @method void setTermId(string $TermId) 设置<p>标准词 ID（UPDATE 与 DELETE 必填，CREATE 留空由后台生成）</p>
 */
class LabelTermModifyItem extends AbstractModel
{
    /**
     * @var integer <p>操作类型（不可为 0，取值：1=新增，2=修改，3=删除）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
     */
    public $ModifyAction;

    /**
     * @var array <p>同义词列表（CREATE 与 UPDATE 时传完整同义词集合，覆盖式更新）</p>
     */
    public $SynonymList;

    /**
     * @var string <p>标准词（CREATE 与 UPDATE 必填，DELETE 可留空）</p>
     */
    public $Term;

    /**
     * @var string <p>标准词 ID（UPDATE 与 DELETE 必填，CREATE 留空由后台生成）</p>
     */
    public $TermId;

    /**
     * @param integer $ModifyAction <p>操作类型（不可为 0，取值：1=新增，2=修改，3=删除）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
     * @param array $SynonymList <p>同义词列表（CREATE 与 UPDATE 时传完整同义词集合，覆盖式更新）</p>
     * @param string $Term <p>标准词（CREATE 与 UPDATE 必填，DELETE 可留空）</p>
     * @param string $TermId <p>标准词 ID（UPDATE 与 DELETE 必填，CREATE 留空由后台生成）</p>
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
        if (array_key_exists("ModifyAction",$param) and $param["ModifyAction"] !== null) {
            $this->ModifyAction = $param["ModifyAction"];
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
