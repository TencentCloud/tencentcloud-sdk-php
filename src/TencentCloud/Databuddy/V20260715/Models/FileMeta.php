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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件元数据
 *
 * @method string getFileId() 获取<p>文件id</p>
 * @method void setFileId(string $FileId) 设置<p>文件id</p>
 * @method string getFileName() 获取<p>文件/文件夹名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件/文件夹名称</p>
 * @method string getFileType() 获取<p>文件类型</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型</p>
 * @method string getCreateTime() 获取<p>创建时间，毫秒秒级时间戳</p><p>参数格式：时间戳</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，毫秒秒级时间戳</p><p>参数格式：时间戳</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：时间戳字符串</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：时间戳字符串</p>
 * @method array getAllowActions() 获取<p>acl权限类型</p>
 * @method void setAllowActions(array $AllowActions) 设置<p>acl权限类型</p>
 * @method boolean getIsFavorite() 获取<p>是否收藏</p>
 * @method void setIsFavorite(boolean $IsFavorite) 设置<p>是否收藏</p>
 * @method string getPathName() 获取<p>文件path</p>
 * @method void setPathName(string $PathName) 设置<p>文件path</p>
 * @method boolean getIsSystemGenerated() 获取<p>是否系统创建</p>
 * @method void setIsSystemGenerated(boolean $IsSystemGenerated) 设置<p>是否系统创建</p>
 */
class FileMeta extends AbstractModel
{
    /**
     * @var string <p>文件id</p>
     */
    public $FileId;

    /**
     * @var string <p>文件/文件夹名称</p>
     */
    public $FileName;

    /**
     * @var string <p>文件类型</p>
     */
    public $FileType;

    /**
     * @var string <p>创建时间，毫秒秒级时间戳</p><p>参数格式：时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：时间戳字符串</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>acl权限类型</p>
     */
    public $AllowActions;

    /**
     * @var boolean <p>是否收藏</p>
     */
    public $IsFavorite;

    /**
     * @var string <p>文件path</p>
     */
    public $PathName;

    /**
     * @var boolean <p>是否系统创建</p>
     */
    public $IsSystemGenerated;

    /**
     * @param string $FileId <p>文件id</p>
     * @param string $FileName <p>文件/文件夹名称</p>
     * @param string $FileType <p>文件类型</p>
     * @param string $CreateTime <p>创建时间，毫秒秒级时间戳</p><p>参数格式：时间戳</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：时间戳字符串</p>
     * @param array $AllowActions <p>acl权限类型</p>
     * @param boolean $IsFavorite <p>是否收藏</p>
     * @param string $PathName <p>文件path</p>
     * @param boolean $IsSystemGenerated <p>是否系统创建</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AllowActions",$param) and $param["AllowActions"] !== null) {
            $this->AllowActions = $param["AllowActions"];
        }

        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("PathName",$param) and $param["PathName"] !== null) {
            $this->PathName = $param["PathName"];
        }

        if (array_key_exists("IsSystemGenerated",$param) and $param["IsSystemGenerated"] !== null) {
            $this->IsSystemGenerated = $param["IsSystemGenerated"];
        }
    }
}
