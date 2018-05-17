<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSessionUuid() 获取唯一id，返回时原样返回
 * @method void setSessionUuid(string $SessionUuid) 设置唯一id，返回时原样返回
 * @method string getScene() 获取doc:文档扫描
 * @method void setScene(string $Scene) 设置doc:文档扫描
 * @method string getData() 获取图片数据的Base64字符串
 * @method void setData(string $Data) 设置图片数据的Base64字符串
 * @method string getSource() 获取源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setSource(string $Source) 设置源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method string getTarget() 获取目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setTarget(string $Target) 设置目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 */

/**
 *ImageTranslate请求参数结构体
 */
class ImageTranslateRequest extends AbstractModel
{
    /**
     * @var string 唯一id，返回时原样返回
     */
    public $SessionUuid;

    /**
     * @var string doc:文档扫描
     */
    public $Scene;

    /**
     * @var string 图片数据的Base64字符串
     */
    public $Data;

    /**
     * @var string 源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Source;

    /**
     * @var string 目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Target;

    /**
     * @var integer 项目id
     */
    public $ProjectId;
    /**
     * @param string $SessionUuid 唯一id，返回时原样返回
     * @param string $Scene doc:文档扫描
     * @param string $Data 图片数据的Base64字符串
     * @param string $Source 源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param string $Target 目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param integer $ProjectId 项目id
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
