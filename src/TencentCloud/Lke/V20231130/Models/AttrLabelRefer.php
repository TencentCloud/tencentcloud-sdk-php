<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签引用信息
 *
 * @method integer getSource() 获取标签来源，1：标签
 * @method void setSource(integer $Source) 设置标签来源，1：标签
 * @method string getAttributeBizId() 获取标签ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置标签ID
 * @method array getLabelBizIds() 获取标签值ID
 * @method void setLabelBizIds(array $LabelBizIds) 设置标签值ID
 */
class AttrLabelRefer extends AbstractModel
{
    /**
     * @var integer 标签来源，1：标签
     */
    public $Source;

    /**
     * @var string 标签ID
     */
    public $AttributeBizId;

    /**
     * @var array 标签值ID
     */
    public $LabelBizIds;

    /**
     * @param integer $Source 标签来源，1：标签
     * @param string $AttributeBizId 标签ID
     * @param array $LabelBizIds 标签值ID
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("LabelBizIds",$param) and $param["LabelBizIds"] !== null) {
            $this->LabelBizIds = $param["LabelBizIds"];
        }
    }
}
