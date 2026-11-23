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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话物料结构
 *
 * @method string getArtifactId() 获取<p>物料ID</p>
 * @method void setArtifactId(string $ArtifactId) 设置<p>物料ID</p>
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method string getAgentId() 获取<p>AgentID</p>
 * @method void setAgentId(string $AgentId) 设置<p>AgentID</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getFilePath() 获取<p>文件沙箱内路径</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件沙箱内路径</p>
 * @method integer getFileSizeBytes() 获取<p>文件字节数</p>
 * @method void setFileSizeBytes(integer $FileSizeBytes) 设置<p>文件字节数</p>
 * @method string getFileSha256() 获取<p>文件摘要值(Sha256)</p>
 * @method void setFileSha256(string $FileSha256) 设置<p>文件摘要值(Sha256)</p>
 * @method string getStatus() 获取<p>物料状态</p><p>枚举值：</p><ul><li>PENDING： 处理中</li><li>READY： 准备完毕</li><li>FAILED： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>物料状态</p><p>枚举值：</p><ul><li>PENDING： 处理中</li><li>READY： 准备完毕</li><li>FAILED： 失败</li></ul>
 * @method string getCreatedTime() 获取<p>创建时间</p><p>参数格式：RFC3339 UTC</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p><p>参数格式：RFC3339 UTC</p>
 * @method string getUploadedTime() 获取<p>更新时间</p><p>参数格式：RFC3339 UTC</p>
 * @method void setUploadedTime(string $UploadedTime) 设置<p>更新时间</p><p>参数格式：RFC3339 UTC</p>
 * @method string getExpiredTime() 获取<p>过期时间</p><p>参数格式：RFC3339 UTC</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>过期时间</p><p>参数格式：RFC3339 UTC</p>
 */
class SessionArtifactDetail extends AbstractModel
{
    /**
     * @var string <p>物料ID</p>
     */
    public $ArtifactId;

    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>AgentID</p>
     */
    public $AgentId;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>文件沙箱内路径</p>
     */
    public $FilePath;

    /**
     * @var integer <p>文件字节数</p>
     */
    public $FileSizeBytes;

    /**
     * @var string <p>文件摘要值(Sha256)</p>
     */
    public $FileSha256;

    /**
     * @var string <p>物料状态</p><p>枚举值：</p><ul><li>PENDING： 处理中</li><li>READY： 准备完毕</li><li>FAILED： 失败</li></ul>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p><p>参数格式：RFC3339 UTC</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：RFC3339 UTC</p>
     */
    public $UploadedTime;

    /**
     * @var string <p>过期时间</p><p>参数格式：RFC3339 UTC</p>
     */
    public $ExpiredTime;

    /**
     * @param string $ArtifactId <p>物料ID</p>
     * @param string $SessionId <p>会话ID</p>
     * @param string $AgentId <p>AgentID</p>
     * @param string $FileName <p>文件名</p>
     * @param string $FilePath <p>文件沙箱内路径</p>
     * @param integer $FileSizeBytes <p>文件字节数</p>
     * @param string $FileSha256 <p>文件摘要值(Sha256)</p>
     * @param string $Status <p>物料状态</p><p>枚举值：</p><ul><li>PENDING： 处理中</li><li>READY： 准备完毕</li><li>FAILED： 失败</li></ul>
     * @param string $CreatedTime <p>创建时间</p><p>参数格式：RFC3339 UTC</p>
     * @param string $UploadedTime <p>更新时间</p><p>参数格式：RFC3339 UTC</p>
     * @param string $ExpiredTime <p>过期时间</p><p>参数格式：RFC3339 UTC</p>
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
        if (array_key_exists("ArtifactId",$param) and $param["ArtifactId"] !== null) {
            $this->ArtifactId = $param["ArtifactId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileSizeBytes",$param) and $param["FileSizeBytes"] !== null) {
            $this->FileSizeBytes = $param["FileSizeBytes"];
        }

        if (array_key_exists("FileSha256",$param) and $param["FileSha256"] !== null) {
            $this->FileSha256 = $param["FileSha256"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UploadedTime",$param) and $param["UploadedTime"] !== null) {
            $this->UploadedTime = $param["UploadedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
