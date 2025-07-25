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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportKeyPair请求参数结构体
 *
 * @method string getKeyName() 获取密钥对名称，可由数字，字母和下划线组成，长度不超过25个字符。
 * @method void setKeyName(string $KeyName) 设置密钥对名称，可由数字，字母和下划线组成，长度不超过25个字符。
 * @method integer getProjectId() 获取密钥对创建后所属的[项目](https://cloud.tencent.com/document/product/378/10861)ID。<br>可以通过以下方式获取项目ID：<li>通过[项目列表](https://console.cloud.tencent.com/project)查询项目ID。</li><li>通过调用接口 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725)，取返回信息中的 `projectId ` 获取项目ID。</li>如果是默认项目，直接填0就可以。
 * @method void setProjectId(integer $ProjectId) 设置密钥对创建后所属的[项目](https://cloud.tencent.com/document/product/378/10861)ID。<br>可以通过以下方式获取项目ID：<li>通过[项目列表](https://console.cloud.tencent.com/project)查询项目ID。</li><li>通过调用接口 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725)，取返回信息中的 `projectId ` 获取项目ID。</li>如果是默认项目，直接填0就可以。
 * @method string getPublicKey() 获取密钥对的公钥内容，`OpenSSH RSA` 格式。
 * @method void setPublicKey(string $PublicKey) 设置密钥对的公钥内容，`OpenSSH RSA` 格式。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到密钥对。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到密钥对。
 */
class ImportKeyPairRequest extends AbstractModel
{
    /**
     * @var string 密钥对名称，可由数字，字母和下划线组成，长度不超过25个字符。
     */
    public $KeyName;

    /**
     * @var integer 密钥对创建后所属的[项目](https://cloud.tencent.com/document/product/378/10861)ID。<br>可以通过以下方式获取项目ID：<li>通过[项目列表](https://console.cloud.tencent.com/project)查询项目ID。</li><li>通过调用接口 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725)，取返回信息中的 `projectId ` 获取项目ID。</li>如果是默认项目，直接填0就可以。
     */
    public $ProjectId;

    /**
     * @var string 密钥对的公钥内容，`OpenSSH RSA` 格式。
     */
    public $PublicKey;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到密钥对。
     */
    public $TagSpecification;

    /**
     * @param string $KeyName 密钥对名称，可由数字，字母和下划线组成，长度不超过25个字符。
     * @param integer $ProjectId 密钥对创建后所属的[项目](https://cloud.tencent.com/document/product/378/10861)ID。<br>可以通过以下方式获取项目ID：<li>通过[项目列表](https://console.cloud.tencent.com/project)查询项目ID。</li><li>通过调用接口 [DescribeProjects](https://cloud.tencent.com/document/api/651/78725)，取返回信息中的 `projectId ` 获取项目ID。</li>如果是默认项目，直接填0就可以。
     * @param string $PublicKey 密钥对的公钥内容，`OpenSSH RSA` 格式。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到密钥对。
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
