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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片处理模板
 *
 * @method integer getDefinition() 获取图片处理模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置图片处理模板唯一标识。
 * @method string getName() 获取图片处理模板名称。
 * @method void setName(string $Name) 设置图片处理模板名称。
 * @method string getComment() 获取图片处理模板描述信息。
 * @method void setComment(string $Comment) 设置图片处理模板描述信息。
 * @method string getType() 获取模板类型。
 * @method void setType(string $Type) 设置模板类型。
 * @method ImageTaskInput getProcessImageConfig() 获取图片处理模板配置参数。
 * @method void setProcessImageConfig(ImageTaskInput $ProcessImageConfig) 设置图片处理模板配置参数。
 * @method string getCreateTime() 获取模板创建时间。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间。
 * @method string getUpdateTime() 获取模板最后修改时间。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间。
 */
class ProcessImageTemplate extends AbstractModel
{
    /**
     * @var integer 图片处理模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 图片处理模板名称。
     */
    public $Name;

    /**
     * @var string 图片处理模板描述信息。
     */
    public $Comment;

    /**
     * @var string 模板类型。
     */
    public $Type;

    /**
     * @var ImageTaskInput 图片处理模板配置参数。
     */
    public $ProcessImageConfig;

    /**
     * @var string 模板创建时间。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 图片处理模板唯一标识。
     * @param string $Name 图片处理模板名称。
     * @param string $Comment 图片处理模板描述信息。
     * @param string $Type 模板类型。
     * @param ImageTaskInput $ProcessImageConfig 图片处理模板配置参数。
     * @param string $CreateTime 模板创建时间。
     * @param string $UpdateTime 模板最后修改时间。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProcessImageConfig",$param) and $param["ProcessImageConfig"] !== null) {
            $this->ProcessImageConfig = new ImageTaskInput();
            $this->ProcessImageConfig->deserialize($param["ProcessImageConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
