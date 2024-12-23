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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFiles请求参数结构体
 *
 * @method string getBusinessType() 获取文件对应业务类型,可以选择的类型如下
<ul><li> **TEMPLATE** : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **DOCUMENT** : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **SEAL** : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li></ul>
 * @method void setBusinessType(string $BusinessType) 设置文件对应业务类型,可以选择的类型如下
<ul><li> **TEMPLATE** : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **DOCUMENT** : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **SEAL** : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li></ul>
 * @method Caller getCaller() 获取执行本接口操作的员工信息。其中OperatorId为必填字段，即用户的UserId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setCaller(Caller $Caller) 设置执行本接口操作的员工信息。其中OperatorId为必填字段，即用户的UserId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method array getFileInfos() 获取请上传文件内容数组，最多可上传20个文件。

<b>所有文件必须符合<font color="red">FileType</font>指定的文件类型。</b>
 * @method void setFileInfos(array $FileInfos) 设置请上传文件内容数组，最多可上传20个文件。

<b>所有文件必须符合<font color="red">FileType</font>指定的文件类型。</b>
 * @method string getFileType() 获取文件类型， 默认通过文件内容和文件后缀一起解析得到文件类型，调用接口时可以显示的指定上传文件的类型。
可支持的指定类型如下:
<ul><li>pdf</li>
<li>doc</li>
<li>docx</li>
<li>xls</li>
<li>xlsx</li>
<li>html</li>
<li>jpg</li>
<li>jpeg</li>
<li>png</li></ul>
如：pdf 表示上传的文件 张三入职合同.pdf的文件类型是 pdf
 * @method void setFileType(string $FileType) 设置文件类型， 默认通过文件内容和文件后缀一起解析得到文件类型，调用接口时可以显示的指定上传文件的类型。
可支持的指定类型如下:
<ul><li>pdf</li>
<li>doc</li>
<li>docx</li>
<li>xls</li>
<li>xlsx</li>
<li>html</li>
<li>jpg</li>
<li>jpeg</li>
<li>png</li></ul>
如：pdf 表示上传的文件 张三入职合同.pdf的文件类型是 pdf
 * @method boolean getCoverRect() 获取此参数仅对上传的PDF文件有效。其主要作用是确定是否将PDF中的灰色矩阵置为白色。
<ul><li>**true**：将灰色矩阵置为白色。</li>
<li>**false**：无需处理，不会将灰色矩阵置为白色（默认）。</li></ul>

注: `该参数仅在关键字定位时，需要去除关键字所在的灰框场景下使用。`
 * @method void setCoverRect(boolean $CoverRect) 设置此参数仅对上传的PDF文件有效。其主要作用是确定是否将PDF中的灰色矩阵置为白色。
<ul><li>**true**：将灰色矩阵置为白色。</li>
<li>**false**：无需处理，不会将灰色矩阵置为白色（默认）。</li></ul>

注: `该参数仅在关键字定位时，需要去除关键字所在的灰框场景下使用。`
 * @method array getCustomIds() 获取用户自定义ID数组，与上传文件一一对应

注: `历史遗留问题，已经废弃，调用接口时不用赋值`
 * @method void setCustomIds(array $CustomIds) 设置用户自定义ID数组，与上传文件一一对应

注: `历史遗留问题，已经废弃，调用接口时不用赋值`
 * @method string getFileUrls() 获取不再使用，上传文件链接数组，最多支持20个URL
 * @method void setFileUrls(string $FileUrls) 设置不再使用，上传文件链接数组，最多支持20个URL
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 */
class UploadFilesRequest extends AbstractModel
{
    /**
     * @var string 文件对应业务类型,可以选择的类型如下
<ul><li> **TEMPLATE** : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **DOCUMENT** : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **SEAL** : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li></ul>
     */
    public $BusinessType;

    /**
     * @var Caller 执行本接口操作的员工信息。其中OperatorId为必填字段，即用户的UserId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Caller;

    /**
     * @var array 请上传文件内容数组，最多可上传20个文件。

<b>所有文件必须符合<font color="red">FileType</font>指定的文件类型。</b>
     */
    public $FileInfos;

    /**
     * @var string 文件类型， 默认通过文件内容和文件后缀一起解析得到文件类型，调用接口时可以显示的指定上传文件的类型。
可支持的指定类型如下:
<ul><li>pdf</li>
<li>doc</li>
<li>docx</li>
<li>xls</li>
<li>xlsx</li>
<li>html</li>
<li>jpg</li>
<li>jpeg</li>
<li>png</li></ul>
如：pdf 表示上传的文件 张三入职合同.pdf的文件类型是 pdf
     */
    public $FileType;

    /**
     * @var boolean 此参数仅对上传的PDF文件有效。其主要作用是确定是否将PDF中的灰色矩阵置为白色。
<ul><li>**true**：将灰色矩阵置为白色。</li>
<li>**false**：无需处理，不会将灰色矩阵置为白色（默认）。</li></ul>

注: `该参数仅在关键字定位时，需要去除关键字所在的灰框场景下使用。`
     */
    public $CoverRect;

    /**
     * @var array 用户自定义ID数组，与上传文件一一对应

注: `历史遗留问题，已经废弃，调用接口时不用赋值`
     */
    public $CustomIds;

    /**
     * @var string 不再使用，上传文件链接数组，最多支持20个URL
     * @deprecated
     */
    public $FileUrls;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @param string $BusinessType 文件对应业务类型,可以选择的类型如下
<ul><li> **TEMPLATE** : 此上传的文件用户生成合同模板，文件类型支持.pdf/.doc/.docx/.html格式，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **DOCUMENT** : 此文件用来发起合同流程，文件类型支持.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html，如果非pdf文件需要通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/CreateConvertTaskApi" target="_blank">创建文件转换任务</a>转换后才能使用</li>
<li> **SEAL** : 此文件用于印章的生成，文件类型支持.jpg/.jpeg/.png</li></ul>
     * @param Caller $Caller 执行本接口操作的员工信息。其中OperatorId为必填字段，即用户的UserId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param array $FileInfos 请上传文件内容数组，最多可上传20个文件。

<b>所有文件必须符合<font color="red">FileType</font>指定的文件类型。</b>
     * @param string $FileType 文件类型， 默认通过文件内容和文件后缀一起解析得到文件类型，调用接口时可以显示的指定上传文件的类型。
可支持的指定类型如下:
<ul><li>pdf</li>
<li>doc</li>
<li>docx</li>
<li>xls</li>
<li>xlsx</li>
<li>html</li>
<li>jpg</li>
<li>jpeg</li>
<li>png</li></ul>
如：pdf 表示上传的文件 张三入职合同.pdf的文件类型是 pdf
     * @param boolean $CoverRect 此参数仅对上传的PDF文件有效。其主要作用是确定是否将PDF中的灰色矩阵置为白色。
<ul><li>**true**：将灰色矩阵置为白色。</li>
<li>**false**：无需处理，不会将灰色矩阵置为白色（默认）。</li></ul>

注: `该参数仅在关键字定位时，需要去除关键字所在的灰框场景下使用。`
     * @param array $CustomIds 用户自定义ID数组，与上传文件一一对应

注: `历史遗留问题，已经废弃，调用接口时不用赋值`
     * @param string $FileUrls 不再使用，上传文件链接数组，最多支持20个URL
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new UploadFile();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CoverRect",$param) and $param["CoverRect"] !== null) {
            $this->CoverRect = $param["CoverRect"];
        }

        if (array_key_exists("CustomIds",$param) and $param["CustomIds"] !== null) {
            $this->CustomIds = $param["CustomIds"];
        }

        if (array_key_exists("FileUrls",$param) and $param["FileUrls"] !== null) {
            $this->FileUrls = $param["FileUrls"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
