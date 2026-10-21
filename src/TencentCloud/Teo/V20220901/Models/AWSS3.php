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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AWS S3 目的地信息。通过 IAM 角色 + External ID 授权 EdgeOne 将实时日志投递至客户的 AWS S3 桶，无需提供长期访问密钥，详情见 [推送至 AWS S3](https://cloud.tencent.com/document/product/1552/96007)。
 *
 * @method string getEndpoint() 获取<p>AWS S3 存储桶对应的服务端点域名，取值可参考 <a href="https://docs.aws.amazon.com/zh_cn/general/latest/gr/rande.html#regional-endpoints">AWS 服务端点</a>。例如：s3.us-west-2.amazonaws.com 。</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>AWS S3 存储桶对应的服务端点域名，取值可参考 <a href="https://docs.aws.amazon.com/zh_cn/general/latest/gr/rande.html#regional-endpoints">AWS 服务端点</a>。例如：s3.us-west-2.amazonaws.com 。</p>
 * @method string getBucketName() 获取<p>AWS S3 存储桶名称。可在 AWS S3 控制台 Buckets（存储桶）列表中查看对应桶名。<br>长度须为 3–63 个字符，只能包含小写字母、数字、句点（.）和连字符（-），且必须以字母或数字开头和结尾。</p>
 * @method void setBucketName(string $BucketName) 设置<p>AWS S3 存储桶名称。可在 AWS S3 控制台 Buckets（存储桶）列表中查看对应桶名。<br>长度须为 3–63 个字符，只能包含小写字母、数字、句点（.）和连字符（-），且必须以字母或数字开头和结尾。</p>
 * @method string getPath() 获取<p>日志文件在 AWS S3 桶中的存储目录路径，以 <code>/</code> 分隔可创建多级目录，且不能包含 <code>./..</code> 等相对路径段，路径总长度不超过 1024 个字节。<br>当目录路径存在时直接使用该路径，当目录路径不存在时会自动创建。<br>目录名仅允许由字母、数字、 及 <code>!-_.*&#39;()</code> 构成。<br>示例：<code>eo-logs/l7-access-logs</code> 。</p>
 * @method void setPath(string $Path) 设置<p>日志文件在 AWS S3 桶中的存储目录路径，以 <code>/</code> 分隔可创建多级目录，且不能包含 <code>./..</code> 等相对路径段，路径总长度不超过 1024 个字节。<br>当目录路径存在时直接使用该路径，当目录路径不存在时会自动创建。<br>目录名仅允许由字母、数字、 及 <code>!-_.*&#39;()</code> 构成。<br>示例：<code>eo-logs/l7-access-logs</code> 。</p>
 * @method string getRoleARN() 获取<p>授权 EdgeOne 访问 AWS S3 桶的 IAM 角色的 ARN。<br>需先在 AWS 账号中创建一个授予 EdgeOne 写入权限的 IAM 角色（创建方式详情见 <a href="https://cloud.tencent.com/document/product/1552/96007">推送至 AWS S3</a>），创建后可在 AWS IAM 控制台的角色详情页顶部查看并复制该角色的 ARN。<br>例如：<code>arn:aws:iam::123456789012:role/eo-logs</code> 。</p>
 * @method void setRoleARN(string $RoleARN) 设置<p>授权 EdgeOne 访问 AWS S3 桶的 IAM 角色的 ARN。<br>需先在 AWS 账号中创建一个授予 EdgeOne 写入权限的 IAM 角色（创建方式详情见 <a href="https://cloud.tencent.com/document/product/1552/96007">推送至 AWS S3</a>），创建后可在 AWS IAM 控制台的角色详情页顶部查看并复制该角色的 ARN。<br>例如：<code>arn:aws:iam::123456789012:role/eo-logs</code> 。</p>
 * @method string getCompressType() 获取<p>数据压缩类型，取值有: <ul><li> gzip：gzip压缩。</li></ul>不填表示不启用压缩。</p>
 * @method void setCompressType(string $CompressType) 设置<p>数据压缩类型，取值有: <ul><li> gzip：gzip压缩。</li></ul>不填表示不启用压缩。</p>
 */
class AWSS3 extends AbstractModel
{
    /**
     * @var string <p>AWS S3 存储桶对应的服务端点域名，取值可参考 <a href="https://docs.aws.amazon.com/zh_cn/general/latest/gr/rande.html#regional-endpoints">AWS 服务端点</a>。例如：s3.us-west-2.amazonaws.com 。</p>
     */
    public $Endpoint;

    /**
     * @var string <p>AWS S3 存储桶名称。可在 AWS S3 控制台 Buckets（存储桶）列表中查看对应桶名。<br>长度须为 3–63 个字符，只能包含小写字母、数字、句点（.）和连字符（-），且必须以字母或数字开头和结尾。</p>
     */
    public $BucketName;

    /**
     * @var string <p>日志文件在 AWS S3 桶中的存储目录路径，以 <code>/</code> 分隔可创建多级目录，且不能包含 <code>./..</code> 等相对路径段，路径总长度不超过 1024 个字节。<br>当目录路径存在时直接使用该路径，当目录路径不存在时会自动创建。<br>目录名仅允许由字母、数字、 及 <code>!-_.*&#39;()</code> 构成。<br>示例：<code>eo-logs/l7-access-logs</code> 。</p>
     */
    public $Path;

    /**
     * @var string <p>授权 EdgeOne 访问 AWS S3 桶的 IAM 角色的 ARN。<br>需先在 AWS 账号中创建一个授予 EdgeOne 写入权限的 IAM 角色（创建方式详情见 <a href="https://cloud.tencent.com/document/product/1552/96007">推送至 AWS S3</a>），创建后可在 AWS IAM 控制台的角色详情页顶部查看并复制该角色的 ARN。<br>例如：<code>arn:aws:iam::123456789012:role/eo-logs</code> 。</p>
     */
    public $RoleARN;

    /**
     * @var string <p>数据压缩类型，取值有: <ul><li> gzip：gzip压缩。</li></ul>不填表示不启用压缩。</p>
     */
    public $CompressType;

    /**
     * @param string $Endpoint <p>AWS S3 存储桶对应的服务端点域名，取值可参考 <a href="https://docs.aws.amazon.com/zh_cn/general/latest/gr/rande.html#regional-endpoints">AWS 服务端点</a>。例如：s3.us-west-2.amazonaws.com 。</p>
     * @param string $BucketName <p>AWS S3 存储桶名称。可在 AWS S3 控制台 Buckets（存储桶）列表中查看对应桶名。<br>长度须为 3–63 个字符，只能包含小写字母、数字、句点（.）和连字符（-），且必须以字母或数字开头和结尾。</p>
     * @param string $Path <p>日志文件在 AWS S3 桶中的存储目录路径，以 <code>/</code> 分隔可创建多级目录，且不能包含 <code>./..</code> 等相对路径段，路径总长度不超过 1024 个字节。<br>当目录路径存在时直接使用该路径，当目录路径不存在时会自动创建。<br>目录名仅允许由字母、数字、 及 <code>!-_.*&#39;()</code> 构成。<br>示例：<code>eo-logs/l7-access-logs</code> 。</p>
     * @param string $RoleARN <p>授权 EdgeOne 访问 AWS S3 桶的 IAM 角色的 ARN。<br>需先在 AWS 账号中创建一个授予 EdgeOne 写入权限的 IAM 角色（创建方式详情见 <a href="https://cloud.tencent.com/document/product/1552/96007">推送至 AWS S3</a>），创建后可在 AWS IAM 控制台的角色详情页顶部查看并复制该角色的 ARN。<br>例如：<code>arn:aws:iam::123456789012:role/eo-logs</code> 。</p>
     * @param string $CompressType <p>数据压缩类型，取值有: <ul><li> gzip：gzip压缩。</li></ul>不填表示不启用压缩。</p>
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RoleARN",$param) and $param["RoleARN"] !== null) {
            $this->RoleARN = $param["RoleARN"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
