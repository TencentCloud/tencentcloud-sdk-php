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
 * 标签引用身份标识（入参用）
 *
 * @method string getLabelId() 获取<p>标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签 ID</p>
 * @method array getLabelTermIdList() 获取<p>标签标准词 ID 列表</p>
 * @method void setLabelTermIdList(array $LabelTermIdList) 设置<p>标签标准词 ID 列表</p>
 */
class LabelRefIdentity extends AbstractModel
{
    /**
     * @var string <p>标签 ID</p>
     */
    public $LabelId;

    /**
     * @var array <p>标签标准词 ID 列表</p>
     */
    public $LabelTermIdList;

    /**
     * @param string $LabelId <p>标签 ID</p>
     * @param array $LabelTermIdList <p>标签标准词 ID 列表</p>
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelTermIdList",$param) and $param["LabelTermIdList"] !== null) {
            $this->LabelTermIdList = $param["LabelTermIdList"];
        }
    }
}
