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
 * DeleteLabelList请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method array getLabelIdList() 获取<p>待删除标签 ID 列表（数量：1~20）</p>
 * @method void setLabelIdList(array $LabelIdList) 设置<p>待删除标签 ID 列表（数量：1~20）</p>
 */
class DeleteLabelListRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var array <p>待删除标签 ID 列表（数量：1~20）</p>
     */
    public $LabelIdList;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param array $LabelIdList <p>待删除标签 ID 列表（数量：1~20）</p>
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

        if (array_key_exists("LabelIdList",$param) and $param["LabelIdList"] !== null) {
            $this->LabelIdList = $param["LabelIdList"];
        }
    }
}
