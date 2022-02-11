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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体库配置项
 *
 * @method boolean getIsFileLibrary() 获取true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。
 * @method void setIsFileLibrary(boolean $IsFileLibrary) 设置true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。
 * @method boolean getIsMultiSpace() 获取true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。
 * @method void setIsMultiSpace(boolean $IsMultiSpace) 设置true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。
 * @method string getCosStorageClass() 获取保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。
 * @method void setCosStorageClass(string $CosStorageClass) 设置保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。
 * @method boolean getUseRecycleBin() 获取是否开启回收站功能。默认为 false。
 * @method void setUseRecycleBin(boolean $UseRecycleBin) 设置是否开启回收站功能。默认为 false。
 * @method integer getAutoRemoveRecycledDays() 获取当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRemoveRecycledDays(integer $AutoRemoveRecycledDays) 设置当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableSearch() 获取是否启用文件路径搜索功能。默认为 false。
 * @method void setEnableSearch(boolean $EnableSearch) 设置是否启用文件路径搜索功能。默认为 false。
 * @method boolean getDenyOnQuotaLessThanUsage() 获取设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。
 * @method void setDenyOnQuotaLessThanUsage(boolean $DenyOnQuotaLessThanUsage) 设置设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。
 * @method boolean getEnableFileHistory() 获取是否开启历史版本。默认为 false。
 * @method void setEnableFileHistory(boolean $EnableFileHistory) 设置是否开启历史版本。默认为 false。
 * @method integer getFileHistoryCount() 获取当开启历史版本时，指定单个文件保留的历史版本的数量上限，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileHistoryCount(integer $FileHistoryCount) 设置当开启历史版本时，指定单个文件保留的历史版本的数量上限，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileHistoryExpireDay() 获取当开启历史版本时，指定历史版本保留的最长天数，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileHistoryExpireDay(integer $FileHistoryExpireDay) 设置当开启历史版本时，指定历史版本保留的最长天数，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDirFileNameLength() 获取目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。
 * @method void setMaxDirFileNameLength(integer $MaxDirFileNameLength) 设置目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。
 * @method boolean getIsPublicRead() 获取是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPublicRead(boolean $IsPublicRead) 设置是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMultiAlbum() 获取媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMultiAlbum(boolean $IsMultiAlbum) 设置媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowPhoto() 获取媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowPhoto(boolean $AllowPhoto) 设置媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowPhotoExtName() 获取当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowPhotoExtName(array $AllowPhotoExtName) 设置当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowVideo() 获取媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowVideo(boolean $AllowVideo) 设置媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowVideoExtName() 获取当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowVideoExtName(array $AllowVideoExtName) 设置当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowFileExtName() 获取指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowFileExtName(array $AllowFileExtName) 设置指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRecognizeSensitiveContent() 获取照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognizeSensitiveContent(boolean $RecognizeSensitiveContent) 设置照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LibraryExtension extends AbstractModel
{
    /**
     * @var boolean true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。
     */
    public $IsFileLibrary;

    /**
     * @var boolean true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。
     */
    public $IsMultiSpace;

    /**
     * @var string 保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。
     */
    public $CosStorageClass;

    /**
     * @var boolean 是否开启回收站功能。默认为 false。
     */
    public $UseRecycleBin;

    /**
     * @var integer 当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRemoveRecycledDays;

    /**
     * @var boolean 是否启用文件路径搜索功能。默认为 false。
     */
    public $EnableSearch;

    /**
     * @var boolean 设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。
     */
    public $DenyOnQuotaLessThanUsage;

    /**
     * @var boolean 是否开启历史版本。默认为 false。
     */
    public $EnableFileHistory;

    /**
     * @var integer 当开启历史版本时，指定单个文件保留的历史版本的数量上限，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileHistoryCount;

    /**
     * @var integer 当开启历史版本时，指定历史版本保留的最长天数，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileHistoryExpireDay;

    /**
     * @var integer 目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。
     */
    public $MaxDirFileNameLength;

    /**
     * @var boolean 是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPublicRead;

    /**
     * @var boolean 媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMultiAlbum;

    /**
     * @var boolean 媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowPhoto;

    /**
     * @var array 当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowPhotoExtName;

    /**
     * @var boolean 媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowVideo;

    /**
     * @var array 当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowVideoExtName;

    /**
     * @var array 指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowFileExtName;

    /**
     * @var boolean 照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognizeSensitiveContent;

    /**
     * @param boolean $IsFileLibrary true 为文件类型媒体库，可存储任何类型文件；false 为媒体类型媒体库，仅可存储照片和视频类型文件。默认为 false。在媒体库创建后不能修改。
     * @param boolean $IsMultiSpace true 为多租户空间媒体库，可创建多个租户空间；false 为单租户空间媒体库，不能创建租户空间，仅可使用默认的单一租户空间。默认为 false。在媒体库创建后不能修改。
     * @param string $CosStorageClass 保存至 COS 对象存储的文件的存储类型，仅支持 STANDARD、STANDARD_IA、INTELLIGENT_TIERING、MAZ_STANDARD、MAZ_STANDARD_IA 和 MAZ_INTELLIGENT_TIERING，默认为 STANDARD，当使用多 AZ 存储桶时将自动使用 MAZ_ 开头的用于多 AZ 的存储类型，否则自动使用非 MAZ_ 开头的用于非多 AZ 的存储类型。当指定智能分层存储 INTELLIGENT_TIERING 或 MAZ_INTELLIGENT_TIERING 时，需要事先为存储桶开启智能分层存储，否则将返回失败。在媒体库创建后不能修改。
     * @param boolean $UseRecycleBin 是否开启回收站功能。默认为 false。
     * @param integer $AutoRemoveRecycledDays 当开启回收站时，自动删除回收站项目的天数，不能超过 1095（3 年），指定为 0 则不自动删除，默认为 0。当未开启回收站时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableSearch 是否启用文件路径搜索功能。默认为 false。
     * @param boolean $DenyOnQuotaLessThanUsage 设置媒体库或租户空间配额且配额小于已使用存储量时，是否拒绝设置请求。默认为 false。
     * @param boolean $EnableFileHistory 是否开启历史版本。默认为 false。
     * @param integer $FileHistoryCount 当开启历史版本时，指定单个文件保留的历史版本的数量上限，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileHistoryExpireDay 当开启历史版本时，指定历史版本保留的最长天数，不能超过 999，指定为 0 则不限制，默认为 0。当未开启历史版本时，该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDirFileNameLength 目录或文件名的最长长度，不能超过 255，默认为 255。修改该参数不会影响存量目录或文件名，即如果将该字段的值改小，已经存在的长度超过目标值的目录或文件名不会发生变化。
     * @param boolean $IsPublicRead 是否开启公有读，开启后读操作无需使用访问令牌，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMultiAlbum 媒体类型媒体库是否开启多相簿，开启后可创建一级目录（即相簿）且媒体文件只能保存在各相簿中，否则不能创建相簿且媒体文件只能保存在根目录。默认为 false。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。在媒体库创建后不能修改。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowPhoto 媒体类型媒体库是否允许上传照片，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowPhotoExtName 当媒体类型媒体库允许上传照片时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowVideo 媒体类型媒体库是否允许上传视频，默认为 true。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowVideoExtName 当媒体类型媒体库允许上传视频时，指定允许的扩展名，默认为空数组，此时将根据文件扩展名对应的 MIME 类型自动判断。仅单租户空间媒体类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowFileExtName 指定文件类型媒体库允许的文件扩展名，默认为空数组，此时允许上传所有类型文件。仅单租户空间文件类型媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RecognizeSensitiveContent 照片上传时是否进行敏感内容鉴定，默认为 false。仅单租户空间媒体库支持该属性，否则该属性为 null。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("IsFileLibrary",$param) and $param["IsFileLibrary"] !== null) {
            $this->IsFileLibrary = $param["IsFileLibrary"];
        }

        if (array_key_exists("IsMultiSpace",$param) and $param["IsMultiSpace"] !== null) {
            $this->IsMultiSpace = $param["IsMultiSpace"];
        }

        if (array_key_exists("CosStorageClass",$param) and $param["CosStorageClass"] !== null) {
            $this->CosStorageClass = $param["CosStorageClass"];
        }

        if (array_key_exists("UseRecycleBin",$param) and $param["UseRecycleBin"] !== null) {
            $this->UseRecycleBin = $param["UseRecycleBin"];
        }

        if (array_key_exists("AutoRemoveRecycledDays",$param) and $param["AutoRemoveRecycledDays"] !== null) {
            $this->AutoRemoveRecycledDays = $param["AutoRemoveRecycledDays"];
        }

        if (array_key_exists("EnableSearch",$param) and $param["EnableSearch"] !== null) {
            $this->EnableSearch = $param["EnableSearch"];
        }

        if (array_key_exists("DenyOnQuotaLessThanUsage",$param) and $param["DenyOnQuotaLessThanUsage"] !== null) {
            $this->DenyOnQuotaLessThanUsage = $param["DenyOnQuotaLessThanUsage"];
        }

        if (array_key_exists("EnableFileHistory",$param) and $param["EnableFileHistory"] !== null) {
            $this->EnableFileHistory = $param["EnableFileHistory"];
        }

        if (array_key_exists("FileHistoryCount",$param) and $param["FileHistoryCount"] !== null) {
            $this->FileHistoryCount = $param["FileHistoryCount"];
        }

        if (array_key_exists("FileHistoryExpireDay",$param) and $param["FileHistoryExpireDay"] !== null) {
            $this->FileHistoryExpireDay = $param["FileHistoryExpireDay"];
        }

        if (array_key_exists("MaxDirFileNameLength",$param) and $param["MaxDirFileNameLength"] !== null) {
            $this->MaxDirFileNameLength = $param["MaxDirFileNameLength"];
        }

        if (array_key_exists("IsPublicRead",$param) and $param["IsPublicRead"] !== null) {
            $this->IsPublicRead = $param["IsPublicRead"];
        }

        if (array_key_exists("IsMultiAlbum",$param) and $param["IsMultiAlbum"] !== null) {
            $this->IsMultiAlbum = $param["IsMultiAlbum"];
        }

        if (array_key_exists("AllowPhoto",$param) and $param["AllowPhoto"] !== null) {
            $this->AllowPhoto = $param["AllowPhoto"];
        }

        if (array_key_exists("AllowPhotoExtName",$param) and $param["AllowPhotoExtName"] !== null) {
            $this->AllowPhotoExtName = $param["AllowPhotoExtName"];
        }

        if (array_key_exists("AllowVideo",$param) and $param["AllowVideo"] !== null) {
            $this->AllowVideo = $param["AllowVideo"];
        }

        if (array_key_exists("AllowVideoExtName",$param) and $param["AllowVideoExtName"] !== null) {
            $this->AllowVideoExtName = $param["AllowVideoExtName"];
        }

        if (array_key_exists("AllowFileExtName",$param) and $param["AllowFileExtName"] !== null) {
            $this->AllowFileExtName = $param["AllowFileExtName"];
        }

        if (array_key_exists("RecognizeSensitiveContent",$param) and $param["RecognizeSensitiveContent"] !== null) {
            $this->RecognizeSensitiveContent = $param["RecognizeSensitiveContent"];
        }
    }
}
