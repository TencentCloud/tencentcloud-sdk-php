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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例标签详情
 *
 * @method AndroidInstanceLabel getLabel() 获取标签
 * @method void setLabel(AndroidInstanceLabel $Label) 设置标签
 * @method string getDescription() 获取标签描述
 * @method void setDescription(string $Description) 设置标签描述
 * @method string getCreateTime() 获取标签创建时间
 * @method void setCreateTime(string $CreateTime) 设置标签创建时间
 */
class AndroidInstanceLabelDetail extends AbstractModel
{
    /**
     * @var AndroidInstanceLabel 标签
     */
    public $Label;

    /**
     * @var string 标签描述
     */
    public $Description;

    /**
     * @var string 标签创建时间
     */
    public $CreateTime;

    /**
     * @param AndroidInstanceLabel $Label 标签
     * @param string $Description 标签描述
     * @param string $CreateTime 标签创建时间
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = new AndroidInstanceLabel();
            $this->Label->deserialize($param["Label"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
