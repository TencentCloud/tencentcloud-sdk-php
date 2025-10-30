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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布详情
 *
 * @method string getReleaseName() 获取发布名称
 * @method void setReleaseName(string $ReleaseName) 设置发布名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroup() 获取发布组
 * @method void setGroup(string $Group) 设置发布组
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getComment() 获取描述
 * @method void setComment(string $Comment) 设置描述
 * @method string getFormat() 获取格式
 * @method void setFormat(string $Format) 设置格式
 * @method string getCreateBy() 获取创建者
 * @method void setCreateBy(string $CreateBy) 设置创建者
 * @method string getModifyBy() 获取修改者
 * @method void setModifyBy(string $ModifyBy) 设置修改者
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class ConfigFilePublishInfo extends AbstractModel
{
    /**
     * @var string 发布名称
     */
    public $ReleaseName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 发布组
     */
    public $Group;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 描述
     */
    public $Comment;

    /**
     * @var string 格式
     */
    public $Format;

    /**
     * @var string 创建者
     */
    public $CreateBy;

    /**
     * @var string 修改者
     */
    public $ModifyBy;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $ReleaseName 发布名称
     * @param string $Namespace 命名空间
     * @param string $Group 发布组
     * @param string $FileName 文件名
     * @param string $Content 内容
     * @param string $Comment 描述
     * @param string $Format 格式
     * @param string $CreateBy 创建者
     * @param string $ModifyBy 修改者
     * @param array $Tags 标签
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
        if (array_key_exists("ReleaseName",$param) and $param["ReleaseName"] !== null) {
            $this->ReleaseName = $param["ReleaseName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("ModifyBy",$param) and $param["ModifyBy"] !== null) {
            $this->ModifyBy = $param["ModifyBy"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ConfigFileTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
