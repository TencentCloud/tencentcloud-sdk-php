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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 补丁信息详情
 *
 * @method string getKBNo() 获取KB编号
 * @method void setKBNo(string $KBNo) 设置KB编号
 * @method string getName() 获取KB名称
 * @method void setName(string $Name) 设置KB名称
 * @method string getPublishTime() 获取2025-05
 * @method void setPublishTime(string $PublishTime) 设置2025-05
 * @method array getRelatedCveId() 获取KB影响的漏洞
 * @method void setRelatedCveId(array $RelatedCveId) 设置KB影响的漏洞
 * @method string getKbDocUrl() 获取KB说明文档
 * @method void setKbDocUrl(string $KbDocUrl) 设置KB说明文档
 * @method integer getId() 获取KB id编号
 * @method void setId(integer $Id) 设置KB id编号
 */
class PatchInfoDetail extends AbstractModel
{
    /**
     * @var string KB编号
     */
    public $KBNo;

    /**
     * @var string KB名称
     */
    public $Name;

    /**
     * @var string 2025-05
     */
    public $PublishTime;

    /**
     * @var array KB影响的漏洞
     */
    public $RelatedCveId;

    /**
     * @var string KB说明文档
     */
    public $KbDocUrl;

    /**
     * @var integer KB id编号
     */
    public $Id;

    /**
     * @param string $KBNo KB编号
     * @param string $Name KB名称
     * @param string $PublishTime 2025-05
     * @param array $RelatedCveId KB影响的漏洞
     * @param string $KbDocUrl KB说明文档
     * @param integer $Id KB id编号
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
        if (array_key_exists("KBNo",$param) and $param["KBNo"] !== null) {
            $this->KBNo = $param["KBNo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("RelatedCveId",$param) and $param["RelatedCveId"] !== null) {
            $this->RelatedCveId = $param["RelatedCveId"];
        }

        if (array_key_exists("KbDocUrl",$param) and $param["KbDocUrl"] !== null) {
            $this->KbDocUrl = $param["KbDocUrl"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
