<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPFakeAPP请求参数结构体
 *
 * @method integer getCompanyId() 获取企业id
 * @method void setCompanyId(integer $CompanyId) 设置企业id
 * @method string getFakeAPPName() 获取仿冒应用名称
 * @method void setFakeAPPName(string $FakeAPPName) 设置仿冒应用名称
 * @method string getAPPChan() 获取仿冒来源
 * @method void setAPPChan(string $APPChan) 设置仿冒来源
 * @method string getFakeAPPPackageName() 获取仿冒应用包名
 * @method void setFakeAPPPackageName(string $FakeAPPPackageName) 设置仿冒应用包名
 * @method string getFakeAPPCert() 获取仿冒应用证书
 * @method void setFakeAPPCert(string $FakeAPPCert) 设置仿冒应用证书
 * @method string getFakeAPPSize() 获取仿冒应用大小
 * @method void setFakeAPPSize(string $FakeAPPSize) 设置仿冒应用大小
 * @method array getFakeAPPSnapshots() 获取仿冒截图
 * @method void setFakeAPPSnapshots(array $FakeAPPSnapshots) 设置仿冒截图
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class CreateBPFakeAPPRequest extends AbstractModel
{
    /**
     * @var integer 企业id
     */
    public $CompanyId;

    /**
     * @var string 仿冒应用名称
     */
    public $FakeAPPName;

    /**
     * @var string 仿冒来源
     */
    public $APPChan;

    /**
     * @var string 仿冒应用包名
     */
    public $FakeAPPPackageName;

    /**
     * @var string 仿冒应用证书
     */
    public $FakeAPPCert;

    /**
     * @var string 仿冒应用大小
     */
    public $FakeAPPSize;

    /**
     * @var array 仿冒截图
     */
    public $FakeAPPSnapshots;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param integer $CompanyId 企业id
     * @param string $FakeAPPName 仿冒应用名称
     * @param string $APPChan 仿冒来源
     * @param string $FakeAPPPackageName 仿冒应用包名
     * @param string $FakeAPPCert 仿冒应用证书
     * @param string $FakeAPPSize 仿冒应用大小
     * @param array $FakeAPPSnapshots 仿冒截图
     * @param string $Note 备注
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("FakeAPPName",$param) and $param["FakeAPPName"] !== null) {
            $this->FakeAPPName = $param["FakeAPPName"];
        }

        if (array_key_exists("APPChan",$param) and $param["APPChan"] !== null) {
            $this->APPChan = $param["APPChan"];
        }

        if (array_key_exists("FakeAPPPackageName",$param) and $param["FakeAPPPackageName"] !== null) {
            $this->FakeAPPPackageName = $param["FakeAPPPackageName"];
        }

        if (array_key_exists("FakeAPPCert",$param) and $param["FakeAPPCert"] !== null) {
            $this->FakeAPPCert = $param["FakeAPPCert"];
        }

        if (array_key_exists("FakeAPPSize",$param) and $param["FakeAPPSize"] !== null) {
            $this->FakeAPPSize = $param["FakeAPPSize"];
        }

        if (array_key_exists("FakeAPPSnapshots",$param) and $param["FakeAPPSnapshots"] !== null) {
            $this->FakeAPPSnapshots = $param["FakeAPPSnapshots"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
