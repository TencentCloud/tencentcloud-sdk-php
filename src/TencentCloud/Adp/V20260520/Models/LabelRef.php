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
 * 标签引用（出参用）
 *
 * @method string getLabelId() 获取<p>标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签 ID</p>
 * @method string getLabelName() 获取<p>标签名称</p>
 * @method void setLabelName(string $LabelName) 设置<p>标签名称</p>
 * @method array getLabelTermIdList() 获取<p>标签标准词 ID 列表</p>
 * @method void setLabelTermIdList(array $LabelTermIdList) 设置<p>标签标准词 ID 列表</p>
 * @method array getLabelTermList() 获取<p>标签标准词列表</p>
 * @method void setLabelTermList(array $LabelTermList) 设置<p>标签标准词列表</p>
 */
class LabelRef extends AbstractModel
{
    /**
     * @var string <p>标签 ID</p>
     */
    public $LabelId;

    /**
     * @var string <p>标签名称</p>
     */
    public $LabelName;

    /**
     * @var array <p>标签标准词 ID 列表</p>
     */
    public $LabelTermIdList;

    /**
     * @var array <p>标签标准词列表</p>
     */
    public $LabelTermList;

    /**
     * @param string $LabelId <p>标签 ID</p>
     * @param string $LabelName <p>标签名称</p>
     * @param array $LabelTermIdList <p>标签标准词 ID 列表</p>
     * @param array $LabelTermList <p>标签标准词列表</p>
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelTermIdList",$param) and $param["LabelTermIdList"] !== null) {
            $this->LabelTermIdList = $param["LabelTermIdList"];
        }

        if (array_key_exists("LabelTermList",$param) and $param["LabelTermList"] !== null) {
            $this->LabelTermList = $param["LabelTermList"];
        }
    }
}
