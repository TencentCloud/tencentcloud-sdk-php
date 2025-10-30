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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 出生证明结构化信息
 *
 * @method NeonatalInfo getNeonatalInfo() 获取新生儿信息
 * @method void setNeonatalInfo(NeonatalInfo $NeonatalInfo) 设置新生儿信息
 * @method ParentInfo getMotherInfo() 获取母亲信息
 * @method void setMotherInfo(ParentInfo $MotherInfo) 设置母亲信息
 * @method ParentInfo getFatherInfo() 获取父亲信息
 * @method void setFatherInfo(ParentInfo $FatherInfo) 设置父亲信息
 * @method IssueInfo getIssueInfo() 获取签发信息
 * @method void setIssueInfo(IssueInfo $IssueInfo) 设置签发信息
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class BirthCert extends AbstractModel
{
    /**
     * @var NeonatalInfo 新生儿信息
     */
    public $NeonatalInfo;

    /**
     * @var ParentInfo 母亲信息
     */
    public $MotherInfo;

    /**
     * @var ParentInfo 父亲信息
     */
    public $FatherInfo;

    /**
     * @var IssueInfo 签发信息
     */
    public $IssueInfo;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param NeonatalInfo $NeonatalInfo 新生儿信息
     * @param ParentInfo $MotherInfo 母亲信息
     * @param ParentInfo $FatherInfo 父亲信息
     * @param IssueInfo $IssueInfo 签发信息
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("NeonatalInfo",$param) and $param["NeonatalInfo"] !== null) {
            $this->NeonatalInfo = new NeonatalInfo();
            $this->NeonatalInfo->deserialize($param["NeonatalInfo"]);
        }

        if (array_key_exists("MotherInfo",$param) and $param["MotherInfo"] !== null) {
            $this->MotherInfo = new ParentInfo();
            $this->MotherInfo->deserialize($param["MotherInfo"]);
        }

        if (array_key_exists("FatherInfo",$param) and $param["FatherInfo"] !== null) {
            $this->FatherInfo = new ParentInfo();
            $this->FatherInfo->deserialize($param["FatherInfo"]);
        }

        if (array_key_exists("IssueInfo",$param) and $param["IssueInfo"] !== null) {
            $this->IssueInfo = new IssueInfo();
            $this->IssueInfo->deserialize($param["IssueInfo"]);
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
