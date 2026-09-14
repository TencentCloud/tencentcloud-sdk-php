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
 * QA 相似问修改项
 *
 * @method string getContent() 获取<p>相似问内容（CREATE 与 UPDATE 必填）</p>
 * @method void setContent(string $Content) 设置<p>相似问内容（CREATE 与 UPDATE 必填）</p>
 * @method integer getModifyAction() 获取<p>操作类型：1=新增，2=修改，3=删除<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
 * @method void setModifyAction(integer $ModifyAction) 设置<p>操作类型：1=新增，2=修改，3=删除<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
 * @method string getSimilarQuestionId() 获取<p>相似问 ID（UPDATE 与 DELETE 必填）</p>
 * @method void setSimilarQuestionId(string $SimilarQuestionId) 设置<p>相似问 ID（UPDATE 与 DELETE 必填）</p>
 */
class SimilarQuestionModifySpec extends AbstractModel
{
    /**
     * @var string <p>相似问内容（CREATE 与 UPDATE 必填）</p>
     */
    public $Content;

    /**
     * @var integer <p>操作类型：1=新增，2=修改，3=删除<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
     */
    public $ModifyAction;

    /**
     * @var string <p>相似问 ID（UPDATE 与 DELETE 必填）</p>
     */
    public $SimilarQuestionId;

    /**
     * @param string $Content <p>相似问内容（CREATE 与 UPDATE 必填）</p>
     * @param integer $ModifyAction <p>操作类型：1=新增，2=修改，3=删除<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>新增</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>修改</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>删除</td></tr></tbody></table></p>
     * @param string $SimilarQuestionId <p>相似问 ID（UPDATE 与 DELETE 必填）</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ModifyAction",$param) and $param["ModifyAction"] !== null) {
            $this->ModifyAction = $param["ModifyAction"];
        }

        if (array_key_exists("SimilarQuestionId",$param) and $param["SimilarQuestionId"] !== null) {
            $this->SimilarQuestionId = $param["SimilarQuestionId"];
        }
    }
}
